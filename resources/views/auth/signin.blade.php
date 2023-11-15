<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Login Page</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href="{{ URL::asset('/css/modify.css') }}">
</head>
<style>
  body {
  font-family: "Open Sans", sans-serif;
  margin: 0;
  height: 100vh;
  display: grid;
  place-items: center;
  background-color: #f3c4cb;
  position: relative;
  overflow: hidden;;
}

#top-image {
  width: 400 px;
  height: 250px;
  position: absolute;
  top: 25%;
  left: 50%;
  bottom: 0;
  margin: 0;
  padding: 0;
  transform: translate(-50%, -50%);
  overflow: hidden;
}

#bottom-image {
  width: 200px;
  height: 150px;
  position: absolute;
  bottom: 5px;
  left: 50%;
  transform: translateX(-50%);
  margin: 0;
  padding: 0;
  overflow: hidden;
}


.c-checkbox {
  display: none;
}

.c-checkbox:nth-of-type(1):checked ~ .c-formContainer .c-form__toggle {
  visibility: hidden;
  opacity: 0;
  transform: scale(0.7);
}
.c-checkbox:nth-of-type(1):checked ~ .c-formContainer .c-form {
  width: 382px;
}
.c-checkbox:nth-of-type(1):checked ~ .c-formContainer .c-form .c-form__group:nth-child(1) {
  visibility: visible;
  opacity: 1;
}
.c-checkbox:nth-of-type(1):checked ~ .c-formContainer .c-form .c-form__group:nth-child(1) .c-form__border {
  width: 100%;
}
.c-checkbox:nth-of-type(1):checked ~ .c-formContainer .c-form .c-form__group:nth-child(1) .c-form__input:not(:placeholder-shown):invalid ~ .c-form__border,
.c-checkbox:nth-of-type(1):checked ~ .c-formContainer .c-form .c-form__group:nth-child(1) .c-form__input:not(:placeholder-shown):invalid ~ .c-form__next {
  color: #ff0033;
}
.c-checkbox:nth-of-type(1):checked ~ .c-formContainer .c-form .c-form__group:nth-child(1) .c-form__input:required:valid ~ .c-form__next {
  pointer-events: initial;
  color: #565656;
}

.c-checkbox:nth-of-type(2):checked ~ .c-form__progress {
  width: calc(100vw / 3);
}
.c-checkbox:nth-of-type(2):checked ~ .c-formContainer .c-form .c-form__group:nth-child(1) {
  visibility: hidden;
  opacity: 0;
}
.c-checkbox:nth-of-type(2):checked ~ .c-formContainer .c-form .c-form__group:nth-child(1) .c-form__border {
  width: 0;
}
.c-checkbox:nth-of-type(2):checked ~ .c-formContainer .c-form .c-form__group:nth-child(2) {
  visibility: visible;
  opacity: 1;
}
.c-checkbox:nth-of-type(2):checked ~ .c-formContainer .c-form .c-form__group:nth-child(2) .c-form__border {
  width: 100%;
}
.c-checkbox:nth-of-type(2):checked ~ .c-formContainer .c-form .c-form__group:nth-child(2) .c-form__input:not(:placeholder-shown):invalid ~ .c-form__border,
.c-checkbox:nth-of-type(2):checked ~ .c-formContainer .c-form .c-form__group:nth-child(2) .c-form__input:not(:placeholder-shown):invalid ~ .c-form__next {
  color: #ff0033;
}
.c-checkbox:nth-of-type(2):checked ~ .c-formContainer .c-form .c-form__group:nth-child(2) .c-form__input:required:valid ~ .c-form__next {
  pointer-events: initial;
  color: #565656;
}

.c-checkbox:nth-of-type(3):checked ~ .c-form__progress {
  width: calc((100vw / 3) + 100vw / 3);
}
.c-checkbox:nth-of-type(3):checked ~ .c-formContainer .c-form .c-form__group:nth-child(2) {
  visibility: hidden;
  opacity: 0;
}
.c-checkbox:nth-of-type(3):checked ~ .c-formContainer .c-form .c-form__group:nth-child(2) .c-form__border {
  width: 0;
}
.c-checkbox:nth-of-type(3):checked ~ .c-formContainer .c-form .c-form__group:nth-child(3) {
  visibility: visible;
  opacity: 1;
}
.c-checkbox:nth-of-type(3):checked ~ .c-formContainer .c-form .c-form__group:nth-child(3) .c-form__border {
  width: 100%;
}
.c-checkbox:nth-of-type(3):checked ~ .c-formContainer .c-form .c-form__group:nth-child(3) .c-form__input:not(:placeholder-shown):invalid ~ .c-form__border,
.c-checkbox:nth-of-type(3):checked ~ .c-formContainer .c-form .c-form__group:nth-child(3) .c-form__input:not(:placeholder-shown):invalid ~ .c-form__next {
  color: #ff0033;
}
.c-checkbox:nth-of-type(3):checked ~ .c-formContainer .c-form .c-form__group:nth-child(3) .c-form__input:required:valid ~ .c-form__next {
  pointer-events: initial;
  color: #565656;
}

#finish:checked ~ .c-form__progress {
  width: 100vw;
}
#finish:checked ~ .c-formContainer .c-form {
  transition: opacity 0.2s 0.1s, transform 0.3s;
  opacity: 0;
  transform: translateX(50%) scaleX(0);
}
#finish:checked ~ .c-formContainer .c-form .c-form__group:nth-child(3) {
  transition: 0s;
  visibility: hidden;
  opacity: 0;
}
#finish:checked ~ .c-formContainer .c-form .c-form__group:nth-child(3) .c-form__border {
  width: 0;
}
#finish:checked ~ .c-formContainer .c-welcome {
  opacity: 1;
}

.c-formContainer {
  width: 180px;
  height: 65px;
  z-index: 1;
  display: flex;
  gap: 10px;
  flex-direction: column;
  justify-content: center;
}

.c-welcome {
  position: absolute;
  width: max-content;
  height: inherit;
  font-size: 40px;
  color: #ffff;
  opacity: 0;
  transition: 0.3s;
}

.c-form {
  position: relative;
  width: inherit;
  height: inherit;
  background-color: #ffffff;
  border-radius: 100px;
}

.c-form__toggle {
  width: inherit;
  height: inherit;
  font-size: 18px;
  background-color: #ffffff;
  cursor: pointer;
  transition: 0.2s;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 10px;
  border-radius: 100px;
}

.c-form__toggleIcon {
  display: inline-block;
  margin-left: 5px;
  position: relative;
  width: 15px;
  height: 17px;
}

.c-form__toggleIcon::before, .c-form__toggleIcon::after {
  content: "";
  position: absolute;
  background-color: #565656;
}
.c-form__toggleIcon::before {
  left: 50%;
  transform: translateX(-50%);
  width: 9px;
  height: 9px;
  border-radius: 50%;
}
.c-form__toggleIcon::after {
  bottom: 0;
  width: 100%;
  height: 7px;
  border-radius: 7px 7px 0 0;
}

.c-form__group {
  width: 100%;
  height: 100%;
  visibility: hidden;
  opacity: 0;
  padding: 12px 15px;
  box-sizing: border-box;
  transition: 0.2s 0.2s;
  position: absolute;
}

.c-form__label {
  position: relative;
  cursor: pointer;
  width: calc(100% - 40px);
  height: 100%;
  display: flex;
  align-items: flex-end;
}

.c-form__input {
  font-size: 20px;
  font-family: inherit;
  width: 100%;
  height: 90%;
  border: 0;
  outline: 0;
  color: #5c4d4c;
  box-sizing: border-box;
  cursor: pointer;
}
.c-form__input:focus ~ .c-form__groupLabel, .c-form__input:not(:placeholder-shown) ~ .c-form__groupLabel {
  font-size: 10px;
  top: -4px;
  transform: translateY(0);
  color: #333333;
}
.c-form__input:focus ~ .c-form__border,
.c-form__input:focus ~ .c-form__next, .c-form__input:not(:placeholder-shown) ~ .c-form__border,
.c-form__input:not(:placeholder-shown) ~ .c-form__next {
  transition: 0.3s;
}
.c-form__input:focus {
  cursor: initial;
}

.c-form__groupLabel {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  transition: 0.2s;
}

.c-form__border {
  position: absolute;
  width: 0;
  height: 3px;
  color: #5c4d4c;
  background-color: currentColor;
  transition: 1s 0.2s ease-out;
}

.c-form__next {
  color: #f3c4cb;
  position: absolute;
  right: -40px;
  height: 100%;
  width: 40px;
  cursor: pointer;
  pointer-events: none;
  display: flex;
  align-items: center;
  justify-content: flex-end;
}

.c-form__nextIcon {
  position: relative;
  right: 1.5px;
  width: 20px;
  height: 3px;
  background-color: currentColor;
}
.c-form__nextIcon::before, .c-form__nextIcon::after {
  content: "";
  position: absolute;
  right: -1.5px;
  width: 15px;
  height: 3px;
  background-color: inherit;
}
.c-form__nextIcon::before {
  bottom: -1.5px;
  transform-origin: top right;
  transform: rotate(45deg);
}
.c-form__nextIcon::after {
  top: -1.5px;
  transform-origin: bottom right;
  transform: rotate(-45deg);
}

.c-form__progress {
  position: fixed;
  left: 0;
  height: 100%;
  width: 0;
  background-color: #cc8c8c;
  transition: 0.3s;
}


</style>

<body>
  <img id="top-image" src="{{ URL::asset('storage/images/2.png') }}">
  <img id="bottom-image" src="{{ URL::asset('storage/images/1.png') }}">

    <input class="c-checkbox" type="checkbox" id="start">
    <input class="c-checkbox" type="checkbox" id="progress2">
    <input class="c-checkbox" type="checkbox" id="progress3">
    <input class="c-checkbox" type="checkbox" id="finish">
    <div class="c-form__progress"></div>

    <div class="c-formContainer">
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <div class="c-welcome">Welcome aboard!</div>

        {{-- LOGIN --}}
        <form class="c-form" action="{{ route('login') }}">
            @csrf
            <div class="c-form__group">
                <label class="c-form__label" for="femail" :value="__('Email')">
                    <input type="email" id="femail" class="c-form__input" placeholder=" "
                        pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" name="email" required>
                    <label class="c-form__next" for="progress3" role="button">
                        <span class="c-form__nextIcon"></span>
                    </label>

                    <span class="c-form__groupLabel">Email</span>
                    <b class="c-form__border"></b>
                </label>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="c-form__group">
                <label class="c-form__label" for="fpass" :value="__('Password')">
                    <input type="password" id="fpass" class="c-form__input" placeholder=" " name="password"
                        required>

                    <label class="c-form__next" for="finish" role="button">
                        <span class="c-form__nextIcon"></span>
                    </label>

                    <span class="c-form__groupLabel">Password</span>
                    <b class="c-form__border"></b>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </label>
            </div>

            <label class="c-form__toggle" for="start">Login<span class="c-form__toggleIcon"></span></label>
        </form>

        {{-- REGISTER --}}
        <form class="c-form" action="{{ route('register') }}">
            <div class="c-form__group">
                <label class="c-form__label" for="username">
                    <input type="text" id="username" class="c-form__input" placeholder=" " pattern="[^\s]+"
                        name="name" required>

                    <label class="c-form__next" for="progress2" role="button">
                        <span class="c-form__nextIcon"></span>
                    </label>

                    <span class="c-form__groupLabel">Create your username.</span>
                    <b class="c-form__border"></b>
                </label>
            </div>

            <div class="c-form__group">
                <label class="c-form__label" for="femail">
                    <input type="email" id="femail" class="c-form__input" placeholder=" " name="email"
                        pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" required>

                    <label class="c-form__next" for="progress3" role="button">
                        <span class="c-form__nextIcon"></span>
                    </label>

                    <span class="c-form__groupLabel">What's your email?</span>
                    <b class="c-form__border"></b>
                </label>
            </div>

            <div class="c-form__group">
                <label class="c-form__label" for="fpass">
                    <input type="password" id="fpass" class="c-form__input" placeholder=" " name="password"
                        required>

                    <label class="c-form__next" for="finish" role="button">
                        <span class="c-form__nextIcon"></span>
                    </label>

                    <span class="c-form__groupLabel">Create your password.</span>
                    <b class="c-form__border"></b>
                </label>
            </div>

            <div class="c-form__group">
                <label for="password_confirmation" :value="__('Confirm Password')">
                    <input id="password_confirmation" class="block mt-1 w-full" type="password"
                        name="password_confirmation" required autocomplete="new-password">

                    <label class="c-form__next" for="finish" role="button">
                        <span class="c-form__nextIcon"></span>
                    </label>

                    <span class="c-form__groupLabel">Create your password.</span>
                    <b class="c-form__border"></b>
                </label>
            </div>
            <label class="c-form__toggle" for="start">Register<span class="c-form__toggleIcon"></span></label>
        </form>
    </div>
</body>

</html>
