
<section class="contact__container">
    <div class="contact__left">
        <h1>お問い合わせ</h1>
        <p>
            弊社へのお問い合わせはこちらからお願いいたします。<br>
            内容を確認し担当部署からご連絡します。<br>
            よろしくお願いいたします。
        </p>
    </div>

    <div class="contact__right">
        <form>
            <div class="form-group">
                <label for="name">名前 <span class="required">*</span></label>
                <input type="text" id="name" name="name" placeholder="例：太郎" required>
            </div>
            <div class="form-group">
                <label for="email">メールアドレス <span class="required">*</span></label>
                <input type="email" id="email" name="email" placeholder="example@knot.com" required>
            </div>
            <div class="form-group">
                <label for="phone">電話番号</label>
                <input type="tel" id="phone" name="phone" placeholder="例：03-1234-5678">
            </div>
            <div class="form-group">
                <label for="inquiry-type">お問い合わせ種別</label>
                <select id="inquiry-type" name="inquiry-type">
                    <option value="">選択してください</option>
                    <option value="product">製品について</option>
                    <option value="service">サービスについて</option>
                </select>
            </div>
            <div class="form-group">
                <label for="contact-method">ご希望の連絡手段</label>
                <select id="contact-method" name="contact-method">
                    <option value="email">メール</option>
                    <option value="phone">電話</option>
                    <option value="any">どちらでも</option>
                </select>
            </div>
            <div class="form-group">
                <label for="message">お問い合わせ内容 <span class="required">*</span></label>
                <textarea id="message" name="message" placeholder="お問い合わせ内容をご入力ください" required></textarea>
            </div>
            <div class="form-group">
                <input type="checkbox" id="policy" name="policy" required>
                <label for="policy">プライバシー・ポリシーに同意する</label>
            </div>
            <div class="form-group">
                <button type="submit" class="btn contactBtn">送信</button>
            </div>
        </form>
    </div>
</section>