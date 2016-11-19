var phrases = [
      'finding a fit for your body type?',
      'overhauling your wardrobe?',
      'finding your personal style?',
      'feeling as good on the outside as you do on the inside?'
    ],
    phraseCycle = 0,
    menuState = 0;

$(document).ready(function(){
  console.log(phrases[0]);

  for(i=0;i<phrases.length;i++){
    $('#phrases').append('<span class="needHelp" id="phrase-' + i +'">' + phrases[i] + '</span>');
  }

  cyclePhrases();
});


function cyclePhrases() {
  $('.needHelp').eq(phraseCycle).fadeIn(400).delay(2500).fadeOut(400, cyclePhrases);

  phraseCycle = ++phraseCycle % $('.needHelp').length;
}

// Mobile Menu Trigger
$('.trigger').on('click', function(){
  if(menuState === 0) {
    $(this).html("close");
    menuState = 1;
    $('.homepage-footer ul').slideDown();
    $('.navBar ul').slideDown();
  } else {
    $(this).html("menu");
    menuState = 0;
    $('.homepage-footer ul').slideUp();
    $('.navBar ul').slideUp();
  }
});
