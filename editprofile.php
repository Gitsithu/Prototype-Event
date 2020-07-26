  <?php include 'header.php'; ?>
  <div class="sttngs">
    <h2>SETTINGS</h2>
<div class="tabordion">
  <section id="section1">
    <input class="t" type="radio" name="sections" id="option1" checked>
    <label for="option1" class="trr"> Account</label>
    <article>
  
    <div class="frm">     
        
<div id='profile-upload'>
<div class="hvr-profile-img">
  
  
  <input type="file" name="logo" id='getval'  class="upload"  id="imag">
    
  <div class="icon">
    <div class="camera4"><span></span></div>
  </div>
  </div>
 
  </div>
  
  <br>
 
<div class="tr">


  <label class="label" for="input">NAME</label>
  
  <input class="input" type="text" id="input" >

		<label class="label" for="input">Email <span>@gmail.com</span><div id="texte"></div>
		  
      
		</label>	
	<input class="input texte" type="text" id="input">
  
  	
  
  </div>

  

	
	<label class="label" for="textarea">Address <p id="count"></p></label> 
	<!--textarea class="textarea" id="textarea"></textarea-->

  
   <textarea class="textarea e" rows="4" cols="25" id="bio" maxlength="500" ></textarea>
    <br>  
   <label class="label" for="select">Township</label>
	<div class="select-wrap e">
		<select class="select" id="select">
			<option value="option">Township</option>
			<option value="option2">Dagon(North)</option>
			<option value="option3">Dagon(South)</option>
      <option value="option3">Option 3</option>
      <option value="option3">Option 3</option>
      <option value="option3">Option 3</option>
      <option value="option3">Option 3</option>
      <option value="option3">Option 3</option>
      <option value="option3">Option 3</option>
      <option value="option3">Option 3</option>
		</select>
	</div>
  	
  
  <!--div class="social">
  
  	<label class="label" for="input">WEBSITE</label>	
	<input class="input e" type="text" id="input">
      </div-->
   
  <br><br>
  <button>Update profile</button>
      
      </div>
       
      
    </article>
  </section>
  
  <section id="section3">
    <input class="t" type="radio" name="sections" id="option3">
    <label for="option3" class="trr">Password</label>
    <article>
   
      <div class="tr wwq">
  	<label class="label" for="input">current Password</label>	
	<input class="input e" type="password" id="input">

  <label class="label" for="input">new password</label>	
	<input class="input e" type="password" id="input">
        
  <label class="label" for="input">repeat password</label>	
	<input class="input e" type="password" id="input">


      </div> 
      <button>Change Password</button>
    </article>
  </section>
  
</div>
  
  
  </div>


<?php include 'footer.php'; ?>