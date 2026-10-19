<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Data\ProjectData;
use App\Mail\ContactFormMail;

class PortfolioController extends Controller
{
    public function home()
    {
        $featuredProjects = ProjectData::getFeatured();
        return view('home', compact('featuredProjects'));
    }

    public function projects()
    {
        $projects = ProjectData::getAll();
        return view('projects.index', compact('projects'));
    }

    public function projectDetail(string $slug)
    {
        $project = ProjectData::findBySlug($slug);

        if (!$project) {
            abort(404);
        }

        $related = ProjectData::getRelated($slug, 2);

        return view('projects.show', compact('project', 'related'));
    }

    public function contact(Request $request)
    {
        $locale = app()->getLocale();

        // --- Validasi ---
        $request->validate([
            'name'    => 'required|string|min:2|max:100',
            'email'   => 'required|email|max:150',
            'subject' => 'required|string|min:3|max:200',
            'message' => 'required|string|min:10|max:2000',
        ], [
            'name.required'    => $locale === 'id' ? 'Nama wajib diisi.' : 'Name is required.',
            'name.min'         => $locale === 'id' ? 'Nama minimal 2 karakter.' : 'Name must be at least 2 characters.',
            'email.required'   => $locale === 'id' ? 'Email wajib diisi.' : 'Email is required.',
            'email.email'      => $locale === 'id' ? 'Format email tidak valid.' : 'Invalid email format.',
            'subject.required' => $locale === 'id' ? 'Subjek wajib diisi.' : 'Subject is required.',
            'subject.min'      => $locale === 'id' ? 'Subjek minimal 3 karakter.' : 'Subject must be at least 3 characters.',
            'message.required' => $locale === 'id' ? 'Pesan wajib diisi.' : 'Message is required.',
            'message.min'      => $locale === 'id' ? 'Pesan minimal 10 karakter.' : 'Message must be at least 10 characters.',
            'message.max'      => $locale === 'id' ? 'Pesan maksimal 2000 karakter.' : 'Message must not exceed 2000 characters.',
        ]);

        // --- Kirim Email ---
        try {
            Mail::to(config('mail.from.address'))
                ->send(new ContactFormMail(
                    senderName:  $request->input('name'),
                    senderEmail: $request->input('email'),
                    mailSubject: $request->input('subject'),
                    messageBody: $request->input('message'),
                ));

            $successMsg = $locale === 'id'
                ? '✅ Pesan Anda berhasil dikirim! Saya akan merespons segera.'
                : '✅ Your message has been sent successfully! I will respond shortly.';

            return back()->with('contact_success', $successMsg);

        } catch (\Throwable $e) {
            Log::error('Contact form mail failed: ' . $e->getMessage());

            $errorMsg = $locale === 'id'
                ? 'Maaf, terjadi kesalahan saat mengirim pesan. Silakan hubungi saya langsung melalui email ikhsanfitra9@gmail.com'
                : 'Sorry, an error occurred while sending your message. Please contact me directly at ikhsanfitra9@gmail.com';

            return back()
                ->withInput()
                ->with('contact_error', $errorMsg);
        }
    }
}
