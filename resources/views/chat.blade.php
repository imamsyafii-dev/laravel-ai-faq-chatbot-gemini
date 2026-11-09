<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat dengan AI</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: Arial, sans-serif;
            background: #f3f4f6;
            color: #1f2937;
        }

        .container {
            width: min(900px, 92%);
            margin: 0 auto;
            padding: 40px 0;
        }

        .header {
            margin-bottom: 24px;
        }

        .header a {
            color: #4f46e5;
            text-decoration: none;
            font-size: 14px;
        }

        h1 {
            margin: 12px 0 6px;
            font-size: 32px;
        }

        .subtitle {
            color: #6b7280;
        }

        .chat-box {
            background: white;
            border-radius: 16px;
            padding: 24px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
        }

        .message {
            padding: 16px;
            margin-bottom: 16px;
            border-radius: 12px;
            line-height: 1.6;
            white-space: pre-wrap;
        }

        .question {
            background: #eef2ff;
            border-left: 4px solid #4f46e5;
        }

        .answer {
            background: #f9fafb;
            border-left: 4px solid #10b981;
        }

        .label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
        }

        textarea {
            width: 100%;
            min-height: 120px;
            padding: 14px;
            border: 1px solid #d1d5db;
            border-radius: 10px;
            resize: vertical;
            font: inherit;
        }

        textarea:focus {
            outline: 2px solid #818cf8;
            border-color: #4f46e5;
        }

        button {
            margin-top: 12px;
            padding: 12px 22px;
            border: 0;
            border-radius: 8px;
            background: #4f46e5;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background: #4338ca;
        }

        .error {
            margin-bottom: 16px;
            padding: 12px;
            color: #991b1b;
            background: #fee2e2;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <main class="container">
        <div class="header">
            <a href="{{ route('home') }}">← Kembali ke Beranda</a>

            <h1>Chat dengan AI</h1>
            <p class="subtitle">
                Tanyakan apa saja dan dapatkan jawaban dari Gemini Cloud Anda.
            </p>
        </div>

        <section class="chat-box">
            @if ($errors->any())
                <div class="error">
                    {{ $errors->first() }}
                </div>
            @endif

            @if (isset($question))
                <div class="message question">
                    <span class="label">Anda</span>
                    {{ $question }}
                </div>
            @endif

            @if (isset($answer))
                <div class="message answer">
                    <span class="label">AI</span>
                    {{ $answer }}
                </div>
            @endif

            <form method="POST" action="{{ route('chat.send') }}">
                @csrf

                <textarea
                    name="message"
                    placeholder="Contoh: Apa itu Laravel?"
                    required
                >{{ old('message') }}</textarea>

                <button type="submit">Kirim Pertanyaan</button>
            </form>
        </section>
    </main>
</body>
</html>