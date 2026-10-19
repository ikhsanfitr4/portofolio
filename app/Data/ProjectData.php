<?php

namespace App\Data;

class ProjectData
{
    /**
     * All portfolio projects.
     * Edit this array to update project information.
     */
    public static function getAll(): array
    {
        return [
            [
                'slug'        => 'sistem-informasi-laundry',
                'number'      => '01',
                'category_id' => 'Sistem Informasi',
                'category_en' => 'Information System',
                'title_id'    => 'Sistem Informasi Manajemen Laundry',
                'title_en'    => 'Laundry Management Information System',
                'tagline_id'  => 'Pengelolaan jasa laundry yang efisien dan terorganisir.',
                'tagline_en'  => 'Efficient and organized laundry service management.',
                'desc_id'     => 'Sistem informasi pelayanan jasa laundry untuk membantu pengelolaan pelanggan, transaksi, pembayaran, dan status laundry secara terstruktur dan efisien.',
                'desc_en'     => 'An information system for laundry services to help manage customers, transactions, payments, and laundry status in a structured and efficient manner.',
                'tech'        => ['Laravel', 'PHP', 'MySQL', 'Tailwind CSS'],
                'status'      => 'in-progress', // Options: done, in-progress, planned
                'featured'    => true,
                'image'       => null, // Set to 'projects/laundry.jpg' when screenshot is available
                'github_url'  => null, // Set to your GitHub repo URL
                'demo_url'    => null, // Set to live demo URL if available
                'problem_id'  => 'Pengelolaan laundry secara manual menyulitkan pemilik bisnis dalam memantau status pesanan, riwayat pelanggan, dan rekap keuangan.',
                'problem_en'  => 'Manual laundry management makes it difficult for business owners to track order status, customer history, and financial summaries.',
                'goal_id'     => 'Membangun sistem digital yang membantu pemilik laundry mengelola seluruh operasional bisnis dengan lebih mudah dan akurat.',
                'goal_en'     => 'Build a digital system to help laundry owners manage all business operations more easily and accurately.',
                'role_id'     => 'Full-stack Developer — bertanggung jawab atas desain database, pengembangan backend dengan Laravel, dan implementasi antarmuka pengguna.',
                'role_en'     => 'Full-stack Developer — responsible for database design, backend development with Laravel, and user interface implementation.',
                'features_id' => [
                    'Manajemen data pelanggan',
                    'Pencatatan transaksi masuk dan keluar',
                    'Pelacakan status laundry (antre, diproses, selesai)',
                    'Rekap pembayaran dan laporan sederhana',
                    'Antarmuka responsif berbasis Tailwind CSS',
                ],
                'features_en' => [
                    'Customer data management',
                    'Incoming and outgoing transaction recording',
                    'Laundry status tracking (queued, processing, done)',
                    'Payment summary and simple reports',
                    'Responsive interface using Tailwind CSS',
                ],
                'challenge_id' => 'Merancang alur status laundry yang fleksibel dan dapat dikustomisasi sesuai kebutuhan bisnis yang berbeda-beda.',
                'challenge_en' => 'Designing a flexible laundry status flow that can be customized for different business needs.',
                'lesson_id'    => 'Pentingnya analisis kebutuhan yang mendalam sebelum mulai coding untuk memastikan sistem benar-benar menjawab masalah pengguna.',
                'lesson_en'    => 'The importance of thorough requirements analysis before coding to ensure the system truly addresses user problems.',
                'images'       => [], // Add screenshot paths here: ['projects/laundry-1.jpg', 'projects/laundry-2.jpg']
                'related'      => ['sistem-informasi-bengkel', 'website-informasi-desa'],
            ],
            [
                'slug'        => 'sistem-informasi-bengkel',
                'number'      => '02',
                'category_id' => 'Sistem Informasi',
                'category_en' => 'Information System',
                'title_id'    => 'Sistem Informasi Manajemen Bengkel',
                'title_en'    => 'Workshop Management Information System',
                'tagline_id'  => 'Solusi digital terintegrasi untuk pengelolaan bengkel modern.',
                'tagline_en'  => 'Integrated digital solution for modern workshop management.',
                'desc_id'     => 'Sistem informasi pengelolaan bengkel yang mencakup data pelanggan, kendaraan, mekanik, servis, sparepart, transaksi, dan audit log secara lengkap.',
                'desc_en'     => 'A workshop management information system covering customer data, vehicles, mechanics, services, spare parts, transactions, and a complete audit log.',
                'tech'        => ['Laravel', 'PHP', 'MySQL'],
                'status'      => 'in-progress',
                'featured'    => true,
                'image'       => null,
                'github_url'  => null,
                'demo_url'    => null,
                'problem_id'  => 'Bengkel tradisional sering kesulitan melacak riwayat servis kendaraan, stok sparepart, dan kinerja mekanik secara akurat.',
                'problem_en'  => 'Traditional workshops often struggle to accurately track vehicle service history, spare part stock, and mechanic performance.',
                'goal_id'     => 'Menyediakan platform manajemen bengkel yang komprehensif untuk meningkatkan efisiensi operasional dan kualitas layanan pelanggan.',
                'goal_en'     => 'Provide a comprehensive workshop management platform to improve operational efficiency and customer service quality.',
                'role_id'     => 'Full-stack Developer — merancang arsitektur sistem, model database, backend Laravel, dan tampilan antarmuka.',
                'role_en'     => 'Full-stack Developer — designing system architecture, database models, Laravel backend, and user interface.',
                'features_id' => [
                    'Manajemen data pelanggan dan kendaraan',
                    'Pencatatan order servis dan penugasan mekanik',
                    'Manajemen stok sparepart',
                    'Pencatatan transaksi dan invoice',
                    'Audit log aktivitas sistem',
                    'Laporan kinerja mekanik',
                ],
                'features_en' => [
                    'Customer and vehicle data management',
                    'Service order recording and mechanic assignment',
                    'Spare part stock management',
                    'Transaction and invoice recording',
                    'System activity audit log',
                    'Mechanic performance reports',
                ],
                'challenge_id' => 'Merancang relasi database yang kompleks antara kendaraan, mekanik, sparepart, dan transaksi agar tetap efisien dan mudah dipahami.',
                'challenge_en' => 'Designing complex database relationships between vehicles, mechanics, spare parts, and transactions while keeping them efficient and easy to understand.',
                'lesson_id'    => 'Pemahaman mendalam tentang proses bisnis di dunia nyata sangat penting sebelum mulai merancang sistem informasi.',
                'lesson_en'    => 'Deep understanding of real-world business processes is crucial before starting to design an information system.',
                'images'       => [],
                'related'      => ['sistem-informasi-laundry', 'website-informasi-desa'],
            ],
            [
                'slug'        => 'website-informasi-desa',
                'number'      => '03',
                'category_id' => 'Website',
                'category_en' => 'Website',
                'title_id'    => 'Website Informasi Desa',
                'title_en'    => 'Village Information Website',
                'tagline_id'  => 'Mendekatkan masyarakat desa dengan informasi publik.',
                'tagline_en'  => 'Bringing village communities closer to public information.',
                'desc_id'     => 'Website informasi desa untuk menyajikan profil desa, informasi publik, berita, dokumentasi, dan informasi layanan kepada masyarakat.',
                'desc_en'     => 'A village information website to present village profiles, public information, news, documentation, and service information to the community.',
                'tech'        => ['Laravel', 'PHP', 'MySQL', 'Tailwind CSS'],
                'status'      => 'in-progress',
                'featured'    => true,
                'image'       => null,
                'github_url'  => null,
                'demo_url'    => null,
                'problem_id'  => 'Masyarakat desa kesulitan mendapatkan informasi resmi tentang profil desa, pengumuman, dan prosedur layanan administrasi.',
                'problem_en'  => 'Village communities find it difficult to access official information about village profiles, announcements, and administrative service procedures.',
                'goal_id'     => 'Membangun website resmi desa yang informatif, mudah diakses, dan dapat dikelola mandiri oleh perangkat desa.',
                'goal_en'     => 'Build an official village website that is informative, accessible, and can be independently managed by village officials.',
                'role_id'     => 'Full-stack Developer — pengembangan website dari desain hingga implementasi backend dan antarmuka publik.',
                'role_en'     => 'Full-stack Developer — website development from design to backend implementation and public interface.',
                'features_id' => [
                    'Profil dan sejarah desa',
                    'Berita dan pengumuman desa',
                    'Galeri dokumentasi kegiatan',
                    'Informasi layanan administrasi',
                    'Kontak dan lokasi desa',
                ],
                'features_en' => [
                    'Village profile and history',
                    'Village news and announcements',
                    'Activity documentation gallery',
                    'Administrative service information',
                    'Village contact and location',
                ],
                'challenge_id' => 'Membuat antarmuka yang sederhana dan mudah digunakan oleh perangkat desa yang tidak memiliki latar belakang teknis.',
                'challenge_en' => 'Creating a simple and easy-to-use interface for village officials without a technical background.',
                'lesson_id'    => 'Desain yang baik adalah desain yang dapat dipahami dan digunakan oleh semua kalangan, bukan hanya oleh pengguna teknis.',
                'lesson_en'    => 'Good design is design that can be understood and used by everyone, not just technical users.',
                'images'       => [],
                'related'      => ['sistem-informasi-laundry', 'sistem-informasi-bengkel'],
            ],
        ];
    }

    public static function getFeatured(): array
    {
        return array_filter(self::getAll(), fn($p) => $p['featured'] === true);
    }

    public static function findBySlug(string $slug): ?array
    {
        foreach (self::getAll() as $project) {
            if ($project['slug'] === $slug) {
                return $project;
            }
        }
        return null;
    }

    public static function getRelated(string $currentSlug, int $limit = 2): array
    {
        $current = self::findBySlug($currentSlug);
        if (!$current) return [];

        $related = [];
        foreach ($current['related'] as $slug) {
            $p = self::findBySlug($slug);
            if ($p) $related[] = $p;
            if (count($related) >= $limit) break;
        }
        return $related;
    }
}
