<style>
  textarea{
    width: 600px;
  }
  .time select {
    color: white;
    padding: 8px 23px;
}
.custom-calendar-container {
    display: flex;
}
.time {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 0px 10px 0px 10px;
    color: #95bdd4;
    
}
.time span {
    font-weight: 700;
}

.cal-div2 {
    display: flex;
}
</style>
<div class="schedule-container">
    <div class="cal-div1">
  <form method="POST" action="{{route('schedListing.store')}}">
    @csrf
    <input type="hidden" name="user_id" value="2">
    <input type="hidden" name="list_id" value="14">
    <div class="custom-calendar-container">
      <input type="date" id="custom-date-input" name="date_schedule" class="btn-flat" value="Request A Tour"  required>
      <div class="time">
        
        <div class="label">
          <span>Select time</span>
        </div>
        <div class="time-wrap">
          <select id="hour-select" class="btn-flat" name="schedtime_hr" value="5">
            <!-- Generate options for hours (0 to 23) -->
            <option value="00">00</option>
            <option value="01">01</option>
            <!-- Add more options for each hour -->
            <!-- Repeat this for all 24 hours -->
            <option value="23">23</option>
        </select>
        <select id="minute-select" class="btn-flat" name="schedtime_min" value="30">
            <!-- Generate options for minutes (0 to 59) -->
            <option value="00">00</option>
            <option value="01">01</option>
            <!-- Add more options for each minute -->
            <!-- Repeat this for all 60 minutes -->
            <option value="59">59</option>
        </select>
        </div>
        
      </div>
      <input type="submit" class="btn-flat  btn-hover" value="Request A Tour">

            </div>
    </div>
    <div class="cal-div2">
      <textarea name="message" id="" cols="30" rows="10" >Hi! I would like to schedule a tour.</textarea>
      
    </div>
  </form>
</div>
<script>
const dateInput = document.getElementById("custom-date-input");

const today = new Date();
today.setHours(0, 0, 0, 0); // Set time to midnight for accuracy
// Calculate the date for today + 5 days
const futureDate = new Date(today);
futureDate.setDate(today.getDate() + 5);
// Format the dates in YYYY-MM-DD (HTML date input format)
const minDate = today.toISOString().split('T')[0];
const maxDate = futureDate.toISOString().split('T')[0];
// Set the min and max attributes of the input field
dateInput.setAttribute("min", minDate);
dateInput.setAttribute("max", maxDate);
dateInput.setAttribute("value", "");



//submitted schedule form

if(window.location.contains("?")) // This doesn't work, any suggestions?
    {
         alert("Schedule submitted");
    }
</script>