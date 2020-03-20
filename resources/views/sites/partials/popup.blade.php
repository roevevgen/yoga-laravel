<div class="overlay fade">
    <div class="popup">
        <div class="popup-close">&times;
        </div>
        <div class="popup-title">
            Форма обратной связи
        </div>
        <div class="popup-form">
            <form action="#" class="main-form">
                @csrf
                <div class="popup-form-header">
                    Узнайте больше о своём отдыхе
                </div>
                <label class="popup-form__label" for="phone">
                    Введите ваш номер телефона:
                </label>
                <input class="popup-form__input" name="phone" type="tel" required placeholder="+38(093) 973 33 45">
                <button class="button popup-form__btn">
                    Оставить заявку!
                </button>
            </form>
        </div>
    </div>
</div>
