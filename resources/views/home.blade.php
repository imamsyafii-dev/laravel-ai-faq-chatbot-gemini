<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel AI FAQ</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #eef2ff, #f8fafc);
            color: #1f2937;
        }

        .hero {
            width: min(760px, 90%);
            padding: 56px 40px;
            text-align: center;
            background: white;
            border-radius: 20px;
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.1);
        }

        .badge {
            display: inline-block;
            padding: 8px 14px;
            color: #4338ca;
            background: #eef2ff;
            border-radius: 999px;
            font-size: 14px;
            font-weight: bold;
        }

        h1 {
            margin: 20px 0 12px;
            font-size: clamp(32px, 6vw, 52px);
            line-height: 1.1;
        }

        .description {
            max-width: 560px;
            margin: 0 auto 30px;
            color: #6b7280;
            font-size: 18px;
            line-height: 1.6;
        }

        .button {
            display: inline-block;
            padding: 14px 24px;
            color: white;
            background: #4f46e5;
            border-radius: 10px;
            text-decoration: none;
            font-weight: bold;
        }

        .button:hover {
            background: #4338ca;
        }

        .features {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 16px;
            margin-top: 42px;
            text-align: left;
        }

        .feature {
            padding: 16px;
            background: #f9fafb;
            border-radius: 12px;
        }

        .feature strong {
            display: block;
            margin-bottom: 6px;
        }

        .feature span {
            color: #6b7280;
            font-size: 14px;
            line-height: 1.4;
        }

        @media (max-width: 600px) {
            .hero {
                padding: 40px 22px;
            }

            .features {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <main class="hero">
        <span class="badge">Laravel AI + Gemini</span>

        <h1>Temukan Jawaban dengan AI</h1>

        <p class="description">
            Chatbot FAQ berbasis Laravel yang menggunakan AI cloud
            untuk menjawab pertanyaan Anda dengan cepat.
        </p>

        <a class="button" href="{{ route('chat') }}">
            Mulai Chat →
        </a>

        <section class="features">
            <div class="feature">
                <strong>⚡ Cepat</strong>
                <span>Dijalankan langsung melalui aplikasi Laravel.</span>
            </div>

            <div class="feature">
                <strong>☁️ Cloud</strong>
                <span>Pertanyaan diproses secara online melalui Gemini API.</span>
            </div>

            <div class="feature">
                <strong>🤖 AI</strong>
                <span>Mendapatkan jawaban dari model Gemini 3.5 Flash Lite.</span>
            </div>
        </section>
    </main>
</body>
</html>
