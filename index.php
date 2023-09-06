<?php

echo '


<style>
body {
 background-color: #64B5F6; 
 position: relative;
 min-height: 90vh;
 overflow-x: hidden;
 font-family: sans-serif;
}
.subscribe-form {
  width: fit-content;
  background-color: #FFF;
  border-radius: 5px;
  padding: 1em;
  margin: 0 auto;
  line-height: 3rem;
  opacity: 1;
}

h1, .textbox, .subscribe-button {
  display: block;
  margin: 10px auto;
}

.textbox {
  width: 100%;
  font-size: 1.5rem;
  border-top: none;
  border-left: none;
  border-right: none;
  color: #F48FB1;
}

.textbox:focus, .textbox:active {
  outline: none;
}

.subscribe-button {
  width: 100%;
  font-size: 1.5rem;
  background-color: #F48FB1;
  border: 0;
  padding: 10px;
  color: #FFF;
  display: flex;
  justify-content: center;
  cursor: pointer;
}

.subscribe-button:focus, .subscribe-button:active {
  outline: none;
}

.subscribe-button:hover:not(:disabled), .subscribe-button:active:not(:disabled) {
  background-color: #F06292;
}

.subscribe-button:active:not(:disabled) {
  box-shadow: 2px 2px rgba(0,0,0,.2) inset;
}

.subscribe-button:disabled {
  cursor: default;
  opacity: .5;
}

h1 {
  color: #E91E63;
}

.button-text:hover, .button-icon:hover {
  cursor: inherit;
}

.button-text {
  margin-right: 10px;
}

.to-expand {
  position: absolute;
  transition: transform .5s;
  top: 50%;
  left: 50%;
}

.to-expand.show svg {
  width: 24px;
  height: 24px;
}

.to-expand.show {
  transform: scale(10, 10);
  animation-name: send-email;
  animation-delay: 1s;
  animation-duration: 1s;
  animation-fill-mode: forwards;
  outline: 1px solid transparent;
}

@keyframes send-email {
  from {left: 50%;}
  to {left: 120%;}
}

.to-fade-in {
  font-size: 6rem;
  position: absolute;
  top: 35%;
  left: 45%;
  color: #E91E63;
  opacity: 0;
  transition: all .5s;
  cursor: default;
  visibility: hidden;
}

.fade-in {
  animation-name: fadeIn;
  animation-delay: 2s;
  animation-fill-mode: forwards;
  animation-duration: 3s;
  visibility: visible;
}

@keyframes fadeIn {
  0% {opacity: 0;}
  50% {opacity: 1;}
  100% {opacity: 0;}
}
</style>

<script>
$(".textbox").keyup(function(){
  $(".subscribe-button").prop("disabled", $(this).val().trim().length == 0);
})
$(".subscribe-button").click(function(){
  $(".subscribe-form").hide();
  $(".to-expand").addClass("show");
  $(".to-fade-in").addClass("fade-in");
  $(".textbox").val("");
  $(".subscribe-button").prop("disabled", true);
  setTimeout(function(){
    $(".subscribe-form").show();
    $(".to-expand").removeClass("show");
    $(".to-fade-in").removeClass("fade-in");
  }, 6000);
});
</script>

<div class="subscribe-form">
  <h1>Subscribe to Our Newsletter!</h1>
  <input type="email" class="textbox" placeholder="Your awesome email" />
  <button class="subscribe-button" type="button" disabled>
    <span class="button-text">Subscribe</span>
    <span class="button-icon"><svg width="24" height="24" viewBox="0 0 24 24">
  <path fill="#FFF" d="M4,4H20A2,2 0 0,1 22,6V18A2,2 0 0,1 20,20H4C2.89,20 2,19.1 2,18V6C2,4.89 2.89,4 4,4M12,11L20,6H4L12,11M4,18H20V8.37L12,13.36L4,8.37V18Z"></path>
      </svg></span>
  </button>
</div>

<span class="to-fade-in">
  Sent!
</span>


'; 

