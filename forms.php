<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fantastic Feral Felines: My Life with 7 Cats and 9 Lives Cat Rescue </title>
  <meta name="description" content="Learn about my live and that of several Mississippi feral kitties">
  <link rel="stylesheet" media="screen" href="css/style.css">
  <link rel="stylesheet" media="print" href="css/print.css">
</head>

<div class="container">

<header class="banner">

<h1>Fantastic Feral Felines</h1>

<img src="images/catsrow100x57.jpg" width="100" height="57" alt="Silhouette of cat behind two smaller cats.">

</header>

<nav class="mainmenu">
   <ul>
      <li><a href="index.php">HOME</a></li>
      <li><a href="aboutus.php">ABOUT US</a></li>
	  <li><a href="9livesinfo.php">9 LIVES</a></li>
	  <li><a href="resources.php">RESOURCES</a></li>
	  <li><a href="forms.php">FORMS</a></li>
   </ul>
</nav>

<main>

<h2>Forms</h2>

<h3 id="tnr-assistance">Request for TNR Assistance</h3>

<p>Fill in the form below to request assistance for TNR for any community, stray, or feral cats.</p>

<?php print $formMessage;?>
<form method="post">

<fieldset>

<legend>Your Contact Information</legend>

<label for="first-name">First Name</label>
<input id="first-name" name="first-name" type="text" required>
<label for="last-name">Last Name</label>
<input id="last-name" name="last-name" type="text" required>
<label for="street-address">Street Address</label>
<input id="street-address" name="street-address" type="text" required>
<label for="city">City</label>
<input id="city" name="city" type="text" required>
<label for="zip-code">Zip/Postal Code</label>
<input id="zip-code" name="zip-code" type="text" required>
<label for="state">State/Province</label>
<input id="state" name="state" type="text" required>
<label for="county">County</label>
<input id="county" name="county" type="text" required>
<label for="phone-number">Phone Number</label>
<input id="phone-number" name="phone-number" type="text" required>
<label for="email">Email</label>
<input id="email" name="email" type="text" required>

</fieldset>

<fieldset>

<legend>Cat Information</legend>

<p class="text-legend">How many cats need to be fixed and what are their genders? If you don't know, use the third option.</p>

<label for="number-cats-female">Number of female cats</label>
<select id="number-cats-female" name="number-cats-female">
	<option value="0">0</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
</select>

<p class="text-legend">How many male cats need to be fixed?</p>

<label for="number-cats-male">Number of male cats</label>
<select id="number-cats-male" name="number-cats-male">
	<option value="0">0</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
</select>

<p class="text-legend">If you don't know the gender, please provide total number of cats needing to be fixed.</p>
<label for="number-cats">Number of cats with unknown gender</label>
<select id="number-cats" name="number-cats">
	<option value="0">0</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
</select>

</fieldset>

<fieldset>
<legend>Other Information</legend>

<p class="text-legend">Are you on government assistance?</p>
<label>Yes <input type="radio" name="government-assistance" value="yes"></label>

<label>No <input type="radio" name="government-assistance" value="no"></label>
</fieldset>

<fieldset>

<legend>Instructions and Agreements</legend>

<p class="text-legend">Animals have to be in <em>plastic or fabric crates, traps, or cages</em>, absolutely <em>no cardboard carriers</em>! Your carrier must be lined with a throw-away towel in the bottom, in case of any accidents happen. Remove food at 10 pm the night before surgery, they can have access to water but not to food. No food on morning of surgery, animals must have an empty stomach. If they happen to eat anything on surgery day let us know, we can work around it. 
Meeting point to be determined as 9LCR works with several clinics. On the day of surgery cat(s) need to be dropped off between 8-8:30 am. Pick up between 4:30-5pm in OXFORD. 
Please check all boxes to acknowledge these important rules:</p>

<label for="carrier">only plastic/fabric crates, traps, cages</label>
<input type="checkbox" id="carrier" name="agreements[]" value="carrier" required>

<label for="towel-carrier">throw-away towel in bottom of carrier</label>
<input type="checkbox" id="towel-carrier" name="agreements[]" value="towel-carrier" required>

<label for="no-food">no food after 10pm the night before surgery</label>
<input type="checkbox" id="no-food" name="agreements[]" value="no-food" required>

<label for="inform-food">let us know if cat did eat on day of surgery</label>
<input type="checkbox" id="inform-food" name="agreements[]" value="inform-food" required>

<label for="drop-off">drop off between 8-8:30am in Oxford</label>
<input type="checkbox" id="drop-off" name="agreements[]" value="drop-off" required>

<label for="pick-up">pick up between 4:30-5pm in Oxford</label>
<input type="checkbox" id="pick-up" name="agreements[]" value="pick-up" required>
</fieldset>

<fieldset>
<legend>Questions, Comment, anything else we need to be aware of?</legend>
<textarea id="questions-comments" name="Questions, Comment, anything else we need to be aware of?"></textarea>
</fieldset>

<input type="submit" value="Submit Form">

</form>

<h3 id="adoption-application">Application for Adoption</h3>

<p>Many factors go into determining which applicant will be matched with a particular animal.  If you are not chosen for this pet, it does not mean that you are not considered a good pet owner or that your home is not acceptable.  Our goal is to place this animal in the home that will best suit its needs.</p>

<p>Please be aware: These applications are processed by volunteers who have full time jobs and families. It may take from 2-7 days to hear back from someone about your application. If we are unable to reach you by phone, we may send an email - so please check your junk mail or spam folders in case those responses end up there. Thank you for your patience and consideration of our volunteers.</p>

<p>Statement: The majority of our adoptable cats have not been tested for FIV or FelV.</p>

<p>You must be at least 21 years old to adopt as the adoption contract is a legal document.</p>

<?php print $formMessage;?>
<form method="post">

<fieldset>
<legend>Your Contact Information</legend>

<label for="first-name">First Name</label>
<input id="first-name" name="first-name" type="text" required>
<label for="last-name">Last Name</label>
<input id="last-name" name="last-name" type="text" required>
<label for="street-address">Street Address</label>
<input id="street-address" name="street-address" type="text" required>
<label for="city">City</label>
<input id="city" name="city" type="text" required>
<label for="zip-code">Zip/Postal Code</label>
<input id="zip-code" name="zip-code" type="text" required>
<label for="state">State/Province</label>
<input id="state" name="state" type="text" required>
<label for="county">County</label>
<input id="county" name="county" type="text" required>
<label for="county">County</label>
<input id="county" name="county" type="text" required>
<label for="phone-number">Phone Number</label>
<input id="phone-number" name="phone-number" type="text" required>
<label for="email">Email</label>
<input id="email" name="email" type="text" required>
</fieldset>

<fieldset>
<legend>Which cat(s) do you want to adopt?</legend>

<label for="cat-name">Cat name or cats names</label>
<input id="cat-name" name="cat-name" type="text" required>

</fieldset>

<fieldset>
<legend>Demographic and Household Information</legend>

<p class="text-legend">What is your age group?</p>
<label>0-20 years <input type="radio" name="age-group" value="0to20"></label>

<label>21-25 years <input type="radio" name="age-group" value="21to25"></label>

<label>26-35 years <input type="radio" name="age-group" value="26to35"></label>

<label>36-59 years <input type="radio" name="age-group" value="36to59"></label>

<label>60+ years <input type="radio" name="age-group" value="60+"></label>

</fieldset>

<p class="text-legend">A cat may live up to 20 years. Do you understand that you are making a commitment to care for this animal for that length of time?</p>

<label>Yes <input type="radio" name="commitment" value="yes"></label>

<label>No <input type="radio" name="commitment" value="no"></label>

<p class="text-legend">Who do you live with? Choose all that apply</p>

<label for="parents">parents</label>
<input type="checkbox" id="parents" name="livingconditions[]" value="parents">

<label for="children">children</label>
<input type="checkbox" id="children" name="livingconditions[]" value="children">

<label for="roommates">roommates</label>
<input type="checkbox" id="roommates" name="livingconditions[]" value="roommates">

<label for="significant-other">Significant other/spouse</label>
<input type="checkbox" id="significant-other" name="livingconditions[]" value="significant-other">

<label for="other-pets">Other pets</label>
<input type="checkbox" id="other-pets" name="livingconditions[]" value="other-pets">

<label for="alone">Alone</label>
<input type="checkbox" id="alone" name="livingconditions[]" value="alone">

<p class="text-legend">Do any household members suffer from pet allergies?</p>
<select name="allergies" required>
	<option value="no">No</option>
	<option value="cats">Cats</option>
	<option value="dogs">Dogs</option>
	<option value="catsanddogs">Cats and Dogs</option>
</select>

<p class="text-legend">What kind of home do you live in?</p>
<select name="home" required>
	<option value="singlefamily">Single Family</option>
	<option value="duplex">Duplex</option>
	<option value="apartment">Apartment</option>
	<option value="townhouse">Townhouse</option>
	<option value="condominium">Condominium</option>
	<option value="mobilehome">Mobile Home</option>
	<option value="militaryhousing">Military Housing</option>
</select>

<p class="text-legend">Do you rent or own your home?</p>

<label>Rent <input type="radio" name="rent-or-own" value="rent"></label>

<label>Own <input type="radio" name="rent-or-own" value="own"></label>

<p class="text-legend">If renting, please provide the phone number of your landlord/landlady?</p>

<label for="landlord-number">Landlord's/landlady's Phone Number</label>
<input id="landlord-number" name="landlord-number" type="text" required>

<p class="text-legend">Extra security deposit required for pets?

<label for="security-deposit">Security Deposit for Pets (no/I don't know/yes/$ amount) </label>
<input id="security-deposit" name="security-deposit" type="text" required>

<p class="text-legend">Employed?</p>

<label>Yes <input type="radio" name="employed" value="yes"></label>

<label>No <input type="radio" name="employed" value="no"></label>

<p class="text-legns">If employed, place of employment(company name/City/State/Position).

<textarea id="place-employment" name="If employed, place of employment(company name/City/State/Position)"></textarea>

</fieldset>

<fieldset>

<legend>Your Pet(s) History</legend>

<p class="text-legend">Number of pets owned in the past?</p>

<select name="number-pets-past" required>
	<option value="0">0</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5+">5+</option>
</select>

<p class="text-legend">Please list your present and past pets, starting with the most recent first. Include: Name of Pet, Current Pet, Breed/Type, Sex, Age, Spayed/Neutered, If no longer owned what happened to the pet?</p>

<textarea id="pet-history" name="past-present-pets"></textarea>

<p class="text-legend">Have you ever sold, given away, or surrendered a pet to a shelter? If Yes, please describe the circumstances.</p>

<textarea id="pet-surrender" name="pet-surrender"></textarea>
</fieldset>

<fieldset>
<legend>Arrangements for Pet</legend>

<p class="text-legend">Reason(s) for wanting cat (check all that apply):</p>

<label for="gift">Gift</label>
<input type="checkbox" id="gift" name="arrangements[]" value="gift">

<label for="barn-cat">Barn Cat</label>
<input type="checkbox" id="barn-cat" name="arrangements[]" value="barn-cat">

<label for="breeding">Breeding</label>
<input type="checkbox" id="breeding" name="arrangements[]" value="breeding">

<label for="mouser">Mouser</label>
<input type="checkbox" id="mouser" name="arrangements[]" value="mouser">

<label for="for-children">For Children</label>
<input type="checkbox" id="for-children" name="arrangements[]" value="for-children">

<label for="companionship">Companionship</label>
<input type="checkbox" id="companionship" name="arrangements[]" value="companionship">

<label for="replacement">Replacement of deceased pet</label>
<input type="checkbox" id="replacement" name="arrangements[]" value="replacement">

<label for="other">Other</label>
<input type="checkbox" id="other" name="arrangements[]" value="other">

<p class="text-legend">Where will this cat live?</p>

<select name="indoor-outdoor" required>
	<option value="indoor">Indoor only</option>
	<option value="outdoor">Outdoor only</option>
	<option value="in-and-out">Indoor and Outdoor</option>
</select>

<p class="text-legend">Who will care for this cat when you have to leave (vacation/ holiday/ hospital/ assisted living)?</p>

<textarea id="vacation-stay" name="vacation-stay"></textarea required>

<p class="text-legend">How will you handle clawing of furniture, carpets, curtains, etc.?</p>

<textarea id="behavior-issues-one" name="behavior-issues-one"></textarea required>

<p class="text-legend">How will you handle elimination outside of the litter box or designated potty area, howling, excessive meowing, etc. should any of these issues arise? Please understand many of these actions are common during the first few weeks as the new pet adjusts to your home.</p>

<textarea id="behavior-issues-two" name="behavior-issues-two"></textarea required>

<p class="text-legend">Name, Address, phone number of your current veterinarian. If none, veterinarian you plan to use:</p>

<textarea id="vet" name="vet"></textarea required>

<p class="text-legend">In order to provide for any necessary medical care and nutritional requirements for this animal, I am willing to spend yearly:</p>

<label for="willing-expenses">In order to provide for any necessary medical care and nutritional requirements for this animal, I am willing to spend yearly:</label>
<input id="willing-expenses" name="willing-expenses" type="text" required>

<p class="text-legend">If you currently have a dog/cat, what are you using as flea preventative?</p>

<label for="flea-preventative">Current Flea Preventative</label>
<input id="flea-preventative" name="flea-preventative" type="text"</input>

<p class="text-legend">Would you agree to a 9 LIVES CAT RESCUE representative visiting your home to check on the animal you are adopting?</p>

<label>Yes <input type="radio" name="home-visit" value="yes"></label>

<label>No <input type="radio" name="home-visit" value="no"></label>

<p class="text-legend">By typing here my name and email address below, I specifically agree that my veterinarian and landlord may release information to 9 Lives Cat Rescue before and after adoption.</p>

<textarea id="info-release" name="info-release"></textarea required>

<p class="text-legend">By entering my email address here I sign this application, I hereby swear that the answers given by me are true and complete to the best of my knowledge</p>

<textarea id="sign-application" name="sign-application"></textarea required>

<input type="submit" value="Submit Form">

</form>

<h3 id="foster-application">Application to become a foster</h3>

<p> In submitting this foster application to 9 Lives Cat Rescue, I agree that I will care for the animal providing necessary food, water, and shelter. I agree this is temporary, and upon adoption or transport, will return upon request the animal at a scheduled date/place by a 9 Lives Cat Rescue representative. I understand that by fostering, I will not hold 9 Lives Cat Rescue or any affiliations with this organization liable for any damages, medical cost, or injuries that may be caused by fostering.</p>

<?php print $formMessage;?>
<form method="post">

<fieldset>

<legend>Your Contact Information</legend>

<label for="first-name">First Name</label>
<input id="first-name" name="first-name" type="text" required>
<label for="last-name">Last Name</label>
<input id="last-name" name="last-name" type="text" required>
<label for="street-address">Street Address</label>
<input id="street-address" name="street-address" type="text" required>
<label for="city">City</label>
<input id="city" name="city" type="text" required>
<label for="zip-code">Zip/Postal Code</label>
<input id="zip-code" name="zip-code" type="text" required>
<label for="state">State/Province</label>
<input id="state" name="state" type="text" required>
<label for="county">County</label>
<input id="county" name="county" type="text" required>
<label for="phone-number">Phone Number</label>
<input id="phone-number" name="phone-number" type="text" required>
<label for="email">Email</label>
<input id="email" name="email" type="text" required>

</fieldset>

<fieldset>

<legend>Demographic and Household Information</legend>

<p class="text-legend">What is your age group?</p>
<label>0-20 years <input type="radio" name="age-group" value="0to20"></label>
<label>21-25 years <input type="radio" name="age-group" value="21to25"></label>
<label>26-35 years <input type="radio" name="age-group" value="26to35"></label>
<label>36-59 years <input type="radio" name="age-group" value="36to59"></label>
<label>60+ years <input type="radio" name="age-group" value="60+"></label>

<p class="text-legend">Do you rent or own your home?</p>

<label>Rent <input type="radio" name="rent-or-own" value="rent"></label>
<label>Own <input type="radio" name="rent-or-own" value="own"></label>

<p class="text-legend">Who do you live with? Choose all that apply</p>

<label for="parents">parents</label>
<input type="checkbox" id="parents" name="livingconditions[]" value="parents">

<label for="children">children</label>
<input type="checkbox" id="children" name="livingconditions[]" value="children">

<label for="roommates">roommates</label>
<input type="checkbox" id="roommates" name="livingconditions[]" value="roommates">

<label for="significant-other">Significant other/spouse</label>
<input type="checkbox" id="significant-other" name="livingconditions[]" value="significant-other">

<label for="other-pets">Other pets</label>
<input type="checkbox" id="other-pets" name="livingconditions[]" value="other-pets">

<label for="alone">Alone</label>
<input type="checkbox" id="alone" name="livingconditions[]" value="alone">

<p class="text-legend">Do any household members suffer from pet allergies?</p>
<select name="allergies" required>
	<option value="no">No</option>
	<option value="cats">Cats</option>
	<option value="dogs">Dogs</option>
	<option value="catsanddogs">Cats and Dogs</option>
</select>

<p class="text-legend">Does everyone in your household agree with you fostering animal(s)?</p>

<label>Yes <input type="radio" name="foster" value="yes"></label>
<label>No <input type="radio" name="foster" value="no"></label>
<label>Unknown <input type="radio" name="foster" value="unknown"></label>

<p class="text-legend">What animals are already in your household including your roommates animal(s).</p>

<textarea id="house-animals" name="house-animals"></textarea required> 

<fieldset>
<legend>Type of Foster Cat(s) and Length of Time</legend>

<p class="text-legend">What type of cat(s) can you foster?</p>

<label for="bottle-feeder">I can bottle-feed kitten(s) every 2 hrs</label>
<input type="checkbox" id="bottle-feeder" name="foster-type[]" value="bottle-feeder">

<label for="weaned">Weaned kitten(s) (older than 6 weeks)</label>
<input type="checkbox" id="weaned" name="foster-type[]" value="weaned">

<label for="senior-cat">Senior cat(s)</label>
<input type="checkbox" id="senior-cat" name="foster-type[]" value="senior-cat">

<label for="shy-cat">Shy cats that need socialization</label>
<input type="checkbox" id="shy-cat" name="foster-type[]" value="shy-cat">

<label for="mom-kittens">Mama with nursing kittens</label>
<input type="checkbox" id="mom-kittens" name="foster-type[]" value="mom-kittens">

<label for="adults">Adult cats</label>
<input type="checkbox" id="adults" name="foster-type[]" value="adults">

<label for="spicy-cats">"Spicy cats" that need socialization</label>
<input type="checkbox" id="spicy-cats" name="foster-type[]" value="spicy-cats">

<label for="med-cats">Cats needing (oral) medication</label>
<input type="checkbox" id="med-cats" name="foster-type[]" value="med-cats">

<p class="text-legend">How long can you foster cat(s)?</p>

<label for="till-weaned">until weaned (bottle babies are often rotated every few days between several dedicated fosters to avoid burn out)</label>
<input type="checkbox" id="till-weaned" name="foster-time[]" value="till-weaned">

<label for="several-weeks">Several weeks (until adopted or sent to Petsmart)</label>
<input type="checkbox" id="several-weeks" name="foster-time[]" value="several-weeks">

<label for="two-weeks">Two weeks only</label>
<input type="checkbox" id="two-weeks" name="foster-time[]" value="two-weeks">

<label for="other-time">Other (Please describe in comment section)</label>
<input type="checkbox" id="other-time" name="foster-time[]" value="other-time">

<p class="text-legend">Where will this cat spend the night?</p>
<textarea id="night-place" name="night-place"></textarea required>

<p class="text-legend">Where will this cat spend the day?</p>
<textarea id="day-place" name="day-place"></textarea required>

<p class="text-legend">Comment/Anything else we need to be aware of?</p>
<textarea id="comment-foster" name="comment-foster"></textarea>
</fieldset>

<input type="submit" value="Submit Form">

</form>

</main>

<aside class="leftsidebar">

<h2>Sections on this page</h2>

<ul>
<li>Request for TNR Assistance Form</li>
<li>Application for Adoption Form</li>
<li>Application to become a foster.</li> 
</ul>

</aside>

<div class="bottombox">

<a href="https://www.petsmart.com/" target="_blank" title="Petsmart">Petsmart</a>
<a href="https://www.petco.com/" target="_blank" title="Petco">Petco</a>
<a href="https://www.chewy.com" target="_blank" title="Chewy">Chewy</a>

</div> <!-- end of bottombox div --> 

<footer class="site-footer">

  <?php include('includes/footer.php');?>

</footer>
	
</div> <!-- end of container div -->
</html>