$(window).scroll(function(){
    var top = $("#moji").offset().top; // ターゲットの位置取得
    var position = top - $(window).height();  // 発火させたい位置
    console.log()
    if($(window).scrollTop() < position){
      // 要素が見えたときの動き 
      $(function() {
        //get the welcome msg element
        var $all_msg = $('#moji');
        //get a list of letters from the welcome text
        var $wordList = $('#moji').text().split("");
        //clear the welcome text msg
        $('#moji').text("");
        //loop through the letters in the $wordList array
        $.each($wordList, function(idx, elem) {
          //create a span for the letter and set opacity to 0
          var newEL = $("<span/>").text(elem).css({
            opacity: 0
          });
          //append it to the welcome message
          newEL.appendTo($all_msg);
          //set the delay on the animation for this element
          newEL.delay(idx * 70);
          //animate the opacity back to full 1
          newEL.animate({
            opacity: 1
          }, 500);
          
        });
      
      });
    
    }
  })
  
 