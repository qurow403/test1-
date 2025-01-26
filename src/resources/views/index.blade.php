<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">FashionablyLate</a>
    </div>
  </header>

  <main>
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>Contact</h2>
      </div>
      <form class="form" action="/confirm" method="post">
        @csrf
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お名前</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="first_name" placeholder="例:山田" value="{{ old('first_name') }}" />
              <input type="text" name="last_name" placeholder="例:太郎" value="{{ old('last_name') }}" />
            </div>
            <div class="form__error">
              @error('first_name')
              <p>{{ $message }}</p>
              @enderror
              @error('last_name')
              <p>{{ $message }}</p>
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}" />
            </div>
            <div class="form__error">
              @error('email')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>

        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">性別</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--radio">
                <label>
                    <input type="radio" name="gender" value="male" checked> 男性
                </label>
                <label>
                    <input type="radio" name="gender" value="female"> 女性
                </label>
                <label>
                    <input type="radio" name="gender" value="other" > その他
                </label>
                </div>
                <div class="form__error">
                @error('gender')
                {{ $message }}
                @enderror
                </div>
            </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">電話番号</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
                <input type="tel" name="tel1" placeholder="080" value="{{ old('tel1') }}" >
                <span class="separator">-</span>
                <input type="tel" name="tel2" placeholder="1234" value="{{ old('tel2') }}" >
                <span class="separator">-</span>
                <input type="tel" name="tel3" placeholder="5678" value="{{ old('tel3') }}" >
            </div>
            <div class="form__error">
              @error('tel1')
              <p>{{ $message }}</p>
              @enderror
              @error('tel2')
              <p>{{ $message }}</p>
              @enderror
              @error('tel3')
              <p>{{ $message }}</p>
              @enderror
            </div>
          </div>
        </div>

         <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">住所</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <input type="text" name="address" placeholder="例:東京都渋谷区千駄々谷1-2-3" value="{{ old('address') }}" />
            </div>
            <div class="form__error">
              @error('address')
              {{ $message }}
              @enderror
            </div>
         </div>

        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">建物名</span>
            </div>
            <div class="form__group-content">
                <input type="text" name="building" placeholder="例:千駄々谷マンション101" value="{{ old('building') }}" />
            </div>
         </div>

        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お問い合わせの種類</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <select class="select_box" name="select_box" required>
                    <option selected disabled>選択してください</option>
                    <option value="商品の交換について">商品の交換について</option>
                    <option value="返品について">返品について</option>
                    <option value="その他">その他</option>
                </select>
            </div>
            <div class="form__error">
              @error('select_box')
              {{ $message }}
              @enderror
            </div>
        </div>


        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせ内容</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--textarea">
              <textarea name="content" placeholder="お問い合わせ内容をご記載ください"></textarea>
            </div>
            <div class="form__error">
              @error('content')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">確認画面</button>
        </div>
      </form>
    </div>
  </main>
</body>

</html>
