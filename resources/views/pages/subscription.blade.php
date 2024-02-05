<x-app-layout>

    <h1 class="main-top">Personolize your plan</h1>

<div class="meal-plan">
  <div class="meal-plan-in">
    <div class="x86">
     <h2>Select your preference</h2>
    <div class="preference">
       
    <div >
      <button id="r335" class="preference-button" value="meat">
        <img src="icons/meat.png" alt="">
        <h5>Meat</h5>
      </button>
    </div>

    <div>
      <button id="r335" class="preference-button" value="keto">
            <img src="icons/keto.png" alt="">
            <h5>Keto</h5>
      </button>
    </div>
        </label>

      <div>
        <button id="r335" class="preference-button" value="vegan">
    
            <img src="icons/vegan.png" alt="">
            <h5>Vegan</h5>
        </button>
      </div>


        <div>
          <button id="r335" class="preference-button" value="fish">
          
          <img src="icons/fish.png" alt="">
          <h5>Pescatarian</h5>
          </button>
        </div>
        <div>
          <button id="r335" class="preference-button" value="gluten">
          <img src="icons/gluten-free.png" alt="">
          <h5>Gluten free</h5>
          </button>
        </div>

        <div >
          <button id="r335" class="preference-button" value="family">
            
          <img src="icons/family.png" alt="">
          <h5>Family frindly</h5>
          </button>
        </div>
      </div>
      </div>
  </div>

  <div class="shock">
      <div id="serving">
        <h4>Servings per meal</h4>
        <label id="r65">
            <input type="radio" value="2" name="serving">
            <span id="r35">2</span>
        </label>
        <label id="r65">
          <input type="radio" value="4" name="serving">
          <span id="r35">4</span>
      </label>
      </div>

      <div id="number-meal">
        <h4>Number of meals pre week</h4>
        <label id="r65">
            <input type="radio" value="2" name="meal-number">
            <span id="t35">2</span>
        </label>
        <label id="r65">
          <input type="radio" value="4" name="meal-number">
          <span id="t35">4</span>
          <label id="r65">
            <input type="radio" value="5" name="meal-number">
            <span id="t35">5</span>
          </label>
            <label id="r65">
              <input type="radio" value="6" name="meal-number">
              <span id="t35">6</span>
      </label>
      </div>
    <div id="bottem-box">
      <div class="price">
        <label for="">Servings per meal</label>
        <span id="servings"></span>
        <br>
        <label for="">Meals per week</label>
        <span id="meals-per-week"></span>
        <br>
        <span id="selected-pref"></span>

        <hr>
       <label>Box Price</label>
      <span id="Box-price"></span>
      <br>
        <label >service charge</label>
      <span id="service-charge"></span>
      <br>
      <div class="total">
      <label>Total price</label>
      <span id="total"></span>
      </div>
    </div>
    </div>
    <button onclick="window.location.href='/info'" class="btn btn-primary">Continue</button>
     </div>
    </div>
      </div>
 
      <script>

        // Get all serving buttons and meal number buttons
const servingButtons = document.querySelectorAll('#serving input[type="radio"]');
const mealNumberButtons = document.querySelectorAll('#number-meal input[type="radio"]');
const selectedServingSpan = document.getElementById('servings');
const selectedMealNumberSpan = document.getElementById('meals-per-week');

let selectedServing;
let bprice = 0;
let tprice = 0;
function updateSelectedValues() {
  selectedServing = Array.from(servingButtons).find(btn => btn.checked);
  const selectedMealNumber = Array.from(mealNumberButtons).find(btn => btn.checked);

  selectedServingSpan.textContent = (selectedServing ? selectedServing.value : 'None');
  selectedMealNumberSpan.textContent = (selectedMealNumber ? selectedMealNumber.value : 'None');
  document.getElementById('service-charge').innerHTML = "500";

  if(selectedServing.value == 2){

     bprice = 3000;
     tprice = 3500;

   
  }
  else if(selectedServing.value == 4){

    bprice = 6000;
    tprice = 6500;
    
  }

  
  switch (selectedMealNumber.value) {
    case 2:
        tprice += 500;
        break;
    case 4:
    tprice += 1000;
        break;
    case 5:
    tprice += 1500;
        break;
    case 6:
    tprice += 2000;
        break;
  }
  document.getElementById('Box-price').innerHTML = bprice;
  document.getElementById('total').innerHTML = tprice;
  
 
}

// Add click event listeners to serving buttons
servingButtons.forEach(button => {
  button.addEventListener('click', updateSelectedValues);
});

// Add click event listeners to meal number buttons
mealNumberButtons.forEach(button => {
  button.addEventListener('click', updateSelectedValues);
});

        
        const buttons = document.querySelectorAll('.preference-button');
        const selectedPreferences = document.getElementById('selected-pref');

      
        
        buttons.forEach(button => {
          button.addEventListener('click', () => {
            
            button.classList.toggle('active');

      const activeButtons = Array.from(document.querySelectorAll('.preference-button.active'));
      const selectedValues = activeButtons.map(btn => btn.value);

    
      selectedPreferences.textContent = 'Selected Preferences: ' + selectedValues.join(', ');
          });
        });

        const boxprice = document.getElementById('box-price');


        var price = 0;



// Assuming 'boxprice' is an element with the id 'boxprice'
document.getElementById('box-price').textContent = price.toFixed(2);



        
  

 

     
 
      </script>
      

</x-app-layout>