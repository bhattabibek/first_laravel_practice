@extends(layout.masterlayout)

@section('content')

  
<div class="contact-us-section">
  <div class="contact">
    <h2>Contact Us Now</h2>
    <div class="contact-form">
      <input type="text" placeholder="Name"><br>
      <input type="email" class="email" placeholder="Email"><br>
      <input type="number" class="number" placeholder="Number">
      <textarea name="" id="" cols="40" rows="10" placeholder="Message"></textarea>
      <br>
      <button class="send">Send</button>
    </div>
  </div>
  <div class="contact-info">
    <h2>Contact Info</h2>
    <p>

      We have over 30 years of experience in Design. <br>We take pride in delivering Intelligent Designs,<br>Engaging Experiences for clients all over the World..</p>
    <div class="location">
      
 
      <div class="location-info">
        <div class="title"> <i class="fa-solid fa-location-dot"></i> Location</div>
        <div class="location-address">  1927 kings Highway,Brooklyn,NY,11229</div>
      </div>
      <br>
      <div class="location-info">
        <div class="title">
          <i class="fa-solid fa-phone"></i>
          +1 (646) 464-1732</div>
        <div class="location-address">Anderson.lallay@gmail.com</div>
      </div>
      <br>
      <div class="location-info">
        <div class="title"><i class="fa-regular fa-clock"></i> Working Hours</div>
        <div class="location-address">
          Monday to Saturday
        
        9AM to 5PM</div>
      </div>
      
    </div>
  </div>
</div>

@end section