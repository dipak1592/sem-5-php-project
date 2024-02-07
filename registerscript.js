document.addEventListener("DOMContentLoaded",() =>{
    const SignUp = document.getElementById("SignUp");
    const Login = document.getElementById("Login");

    switchToSignUp = () =>{
        Login.style.transform = "rotate(-5deg)";
        Login.style.animationName = "toRightSignUp";
        Login.style.animationDuration = "1s";

        setTimeout(() =>  {
            Login.style.zIndex = "1";
            SignUp.style.zIndex = "2";
            Login.style.animationName = "toPositionSignup";
            Login.style.animationDuration = "1s";
        },900);
    };
    switchToLogin = () =>{
        SignUp.style.transform = "rotate(5deg)";
        SignUp.style.animationName = "toRightLogin";
        SignUp.style.animationDuration = "1s";

        setTimeout(() =>  {
            SignUp.style.zIndex = "1";
            Login.style.zIndex = "2";
            SignUp.style.animationName = "toPosition";
            SignUp.style.animationDuration = "1s";
        },900);
    };
});