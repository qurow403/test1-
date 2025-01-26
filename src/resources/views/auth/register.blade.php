<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLateRegister</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
</head>

<body>
    <h1>FashionablyLate</h1>
    <h2>Register</h2>

    <div class="container">
        <form class="form" action="/register" method="post">
            @csrf

            <!-- お名前 -->
            <div class="form__group">
                <div class="form__group-title">
                    <label class="form__label--item" for="name">お名前</label>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="text" name="name" id="name" placeholder="例: 山田 太郎" value="{{ old('name') }}">
                    </div>
                    <div class="form__error">
                        @error('name')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>

            <!-- メールアドレス -->
            <div class="form__group">
                <div class="form__group-title">
                    <label class="form__label--item" for="email">メールアドレス</label>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="email" name="email" id="email" placeholder="例: test@example.com" value="{{ old('email') }}">
                    </div>
                    <div class="form__error">
                        @error('email')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>

            <!-- パスワード -->
            <div class="form__group">
                <div class="form__group-title">
                    <label class="form__label--item" for="password">パスワード</label>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="password" name="password" id="password" placeholder="例: coachtech106">
                    </div>
                    <div class="form__error">
                        @error('password')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>

            <!-- 登録ボタン -->
            <button class="button" type="submit">登録</button>

        </form>
    </div>

</body>
</html>