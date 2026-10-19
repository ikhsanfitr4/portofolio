<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Baru dari {{ $senderName }}</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #0D0E1A;
            color: #F5F7FF;
            padding: 32px 16px;
        }
        .wrapper {
            max-width: 600px;
            margin: 0 auto;
        }
        /* Header */
        .header {
            background: linear-gradient(135deg, #1B1D2C, #141624);
            border: 1px solid rgba(139,92,246,0.3);
            border-radius: 16px 16px 0 0;
            padding: 32px 36px 28px;
            text-align: center;
        }
        .logo-box {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 48px; height: 48px;
            border-radius: 12px;
            background: linear-gradient(135deg, #8B5CF6, #6D28D9);
            border: 1px solid rgba(139,92,246,0.5);
            font-weight: 900;
            font-size: 18px;
            color: #fff;
            margin-bottom: 12px;
            letter-spacing: -1px;
        }
        .brand-name {
            font-size: 11px;
            font-family: 'Courier New', monospace;
            letter-spacing: 4px;
            text-transform: uppercase;
            color: #00E5FF;
            margin-bottom: 8px;
        }
        .header h1 {
            font-size: 22px;
            font-weight: 700;
            color: #F5F7FF;
        }
        .header-divider {
            width: 48px; height: 2px;
            background: linear-gradient(90deg, #8B5CF6, #00E5FF);
            border-radius: 2px;
            margin: 16px auto 0;
        }
        /* Body */
        .body {
            background: #141624;
            border-left: 1px solid rgba(139,92,246,0.2);
            border-right: 1px solid rgba(139,92,246,0.2);
            padding: 36px;
        }
        .alert-new {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(139,92,246,0.12);
            border: 1px solid rgba(139,92,246,0.3);
            border-radius: 8px;
            padding: 8px 14px;
            font-size: 12px;
            font-family: 'Courier New', monospace;
            color: #A78BFA;
            margin-bottom: 28px;
            letter-spacing: 1px;
            text-transform: uppercase;
        }
        .alert-dot {
            width: 6px; height: 6px;
            border-radius: 50%;
            background: #8B5CF6;
            animation: none;
        }
        /* Info rows */
        .info-grid {
            display: grid;
            gap: 4px;
            margin-bottom: 28px;
        }
        .info-row {
            display: flex;
            gap: 0;
            border-radius: 8px;
            overflow: hidden;
        }
        .info-label {
            background: rgba(139,92,246,0.12);
            border: 1px solid rgba(139,92,246,0.2);
            color: #A78BFA;
            font-family: 'Courier New', monospace;
            font-size: 11px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 10px 14px;
            min-width: 90px;
            display: flex;
            align-items: center;
        }
        .info-value {
            background: rgba(27,29,44,0.8);
            border: 1px solid rgba(255,255,255,0.07);
            border-left: none;
            color: #F5F7FF;
            font-size: 14px;
            padding: 10px 16px;
            flex: 1;
            word-break: break-word;
        }
        /* Message box */
        .message-label {
            font-family: 'Courier New', monospace;
            font-size: 11px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: #00E5FF;
            margin-bottom: 10px;
        }
        .message-box {
            background: rgba(10,12,24,0.8);
            border: 1px solid rgba(0,229,255,0.2);
            border-radius: 10px;
            padding: 20px 24px;
            font-size: 15px;
            line-height: 1.75;
            color: #D1D5E8;
            white-space: pre-wrap;
            word-break: break-word;
        }
        /* Reply CTA */
        .reply-section {
            margin-top: 28px;
            padding: 20px 24px;
            background: rgba(139,92,246,0.06);
            border: 1px solid rgba(139,92,246,0.2);
            border-radius: 10px;
            text-align: center;
        }
        .reply-section p {
            color: #A3A8BD;
            font-size: 13px;
            margin-bottom: 14px;
        }
        .reply-btn {
            display: inline-block;
            background: linear-gradient(135deg, #8B5CF6, #6D28D9);
            color: #fff !important;
            text-decoration: none;
            padding: 10px 28px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            letter-spacing: 0.3px;
        }
        /* Footer */
        .footer {
            background: #10111B;
            border: 1px solid rgba(139,92,246,0.15);
            border-top: none;
            border-radius: 0 0 16px 16px;
            padding: 20px 36px;
            text-align: center;
        }
        .footer p {
            color: rgba(163,168,189,0.5);
            font-size: 11px;
            font-family: 'Courier New', monospace;
            line-height: 1.6;
        }
        .neon-line {
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(139,92,246,0.4), rgba(0,229,255,0.3), transparent);
            margin-bottom: 16px;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        {{-- Header --}}
        <div class="header">
            <div class="logo-box">IF</div>
            <div class="brand-name">NEONVERSE</div>
            <h1>📬 Pesan Baru Masuk</h1>
            <div class="header-divider"></div>
        </div>

        {{-- Body --}}
        <div class="body">
            <div class="alert-new">
                <span class="alert-dot"></span>
                Pesan baru dari contact form portfolio
            </div>

            {{-- Sender info --}}
            <div class="info-grid">
                <div class="info-row">
                    <span class="info-label">Nama</span>
                    <span class="info-value">{{ $senderName }}</span>
                </div>
                <div class="info-row">
                    <span class="info-label">Email</span>
                    <span class="info-value">
                        <a href="mailto:{{ $senderEmail }}" style="color: #A78BFA; text-decoration: none;">{{ $senderEmail }}</a>
                    </span>
                </div>
                <div class="info-row">
                    <span class="info-label">Subjek</span>
                    <span class="info-value">{{ $mailSubject }}</span>
                </div>
                <div class="info-row">
                    <span class="info-label">Waktu</span>
                    <span class="info-value" style="font-size:12px; color: #A3A8BD;">{{ now()->timezone('Asia/Jakarta')->format('d M Y, H:i') }} WIB</span>
                </div>
            </div>

            {{-- Message --}}
            <div class="message-label">💬 Isi Pesan</div>
            <div class="message-box">{{ $messageBody }}</div>

            {{-- Reply CTA --}}
            <div class="reply-section">
                <p>Balas langsung ke pengirim — klik tombol di bawah atau reply email ini.</p>
                <a href="mailto:{{ $senderEmail }}?subject=Re: {{ $mailSubject }}" class="reply-btn">
                    Balas Pesan
                </a>
            </div>
        </div>

        {{-- Footer --}}
        <div class="footer">
            <div class="neon-line"></div>
            <p>
                Email ini dikirim otomatis dari contact form<br>
                <strong style="color: rgba(163,168,189,0.8);">NEONVERSE — Portfolio Ikhsan Fitrah Al Mubarak</strong><br>
                Jangan membalas email ini secara langsung — gunakan tombol "Balas Pesan" di atas.
            </p>
        </div>
    </div>
</body>
</html>
