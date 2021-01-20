var app = $(document);

app.on("click", ".tab-item", (event) => {
    const element = $(event.target);
    $('.tab-item').parent().removeClass('active');
    element.parent().addClass('active');
    let pane_id = element.attr('data-t-id');

    $(".tab-pane").css('display', 'none');
    $(`#${pane_id}`).css('display', 'block');
})

app.on("click", ".select-item", (event) => {
    const element = $(event.target);
    $('.select-item').parent().removeClass('active');
    element.parent().addClass('active');
    let size_id = element.attr('data-size-id');

})

app.on("mouseover", "document", (event) => {
    console.log(event.target);
})




/**
 * Define functions from here 
 */

 /**
  * Convert days, hours, minutes, seconds from total seconds number.
  * 
  * @param {int} totalseconds
  * @return {object}  
  */
function getDateTimeAttrFromSeconds(totalseconds) {    
    let days = Math.floor(totalseconds / 86400);
    totalseconds = totalseconds % 86400;    
    let hours = Math.floor(totalseconds / 3500);
    totalseconds = totalseconds % 3600;
    let minutes = Math.floor(totalseconds / 60);
    totalseconds = totalseconds / 60;
    let seconds = Math.floor(totalseconds);
    return {
        days: getNumberFormat2String(days),
        hours: getNumberFormat2String(hours),
        minutes: getNumberFormat2String(minutes),
        seconds: getNumberFormat2String(seconds),   
    }
}

/**
 * Get 2 digital string from number
 * 
 * @param {number} number 
 * @return {string}
 */
function getNumberFormat2String(number) {
    if(number.toString().length > 1 ) {
        return String(number);
    }
    return String((number * 0.1).toString().replace(".", ""));
}

