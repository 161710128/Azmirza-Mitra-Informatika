/*
$(window).load(function() {
   $('.preloader').fadeOut('slow');
});
*/

/*
function fadeInPage() {
  if (!window.AnimationEvent) { return; }
    var fader = document.getElementById('fader');
    fader.classList.add('fade-out');
}

document.addEventListener('DOMContentLoaded', function() {
  if (!window.AnimationEvent) { return; }
    var anchors = document.getElementsByTagName('a');
    
    for (var idx=0; idx<anchors.length; idx+=1) {
        if (anchors[idx].hostname !== window.location.hostname) {
            continue;
        }
        anchors[idx].addEventListener('click', function(event) {
            var fader = document.getElementById('fader'),
                anchor = event.currentTarget;
            
            var listener = function() {
                window.location = anchor.href;
                fader.removeEventListener('animationend', listener);
            };
            fader.addEventListener('animationend', listener);
            
            event.preventDefault();

            fader.classList.add('fade-in');
        });
    }
});

window.addEventListener('pageshow', function (event) {
  if (!event.persisted) {
    return;
  }
  var fader = document.getElementById('fader');
  fader.classList.remove('fade-in');
});
*/


//untuk fadeout pakai Link
$('#link').on('click', function() {
    if ($('#unload-abu').css('opacity') == 0) {
        $('#unload-abu').css('display', 'block');
        $('#unload-abu').css('opacity', 1);
    }
    else {
        $('#unload-abu').css('opacity', 0);
    }
});


$('#link2').on('click', function() {
    if ($('#unload-abu').css('opacity') == 0) {
        $('#unload-abu').css('display', 'block');
        $('#unload-abu').css('opacity', 1);
    }
    else {
        $('#unload-abu').css('opacity', 0);
    }
});

$('#link3').on('click', function() {
    if ($('#unload-abu').css('opacity') == 0) {
        $('#unload-abu').css('display', 'block');
        $('#unload-abu').css('opacity', 1);
    }
    else {
        $('#unload-abu').css('opacity', 0);
    }
});

$('#link4').on('click', function() {
    if ($('#unload-abu').css('opacity') == 0) {
        $('#unload-abu').css('display', 'block');
        $('#unload-abu').css('opacity', 1);
    }
    else {
        $('#unload-abu').css('opacity', 0);
    }
});

$('#link5').on('click', function() {
    if ($('#unload-abu').css('opacity') == 0) {
        $('#unload-abu').css('display', 'block');
        $('#unload-abu').css('opacity', 1);
    }
    else {
        $('#unload-abu').css('opacity', 0);
    }
});

$('#link6').on('click', function() {
    if ($('#unload-abu').css('opacity') == 0) {
        $('#unload-abu').css('display', 'block');
        $('#unload-abu').css('opacity', 1);
    }
    else {
        $('#unload-abu').css('opacity', 0);
    }
});

$('#link7').on('click', function() {
    if ($('#unload-abu').css('opacity') == 0) {
        $('#unload-abu').css('display', 'block');
        $('#unload-abu').css('opacity', 1);
    }
    else {
        $('#unload-abu').css('opacity', 0);
    }
});


//Untuk Delay Page Link Redirect
function goURL(url){
setTimeout(function(){window.location.href=url},500)
}



/*
//untuk scroll menu hide atau show
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("menuToggle").style.top = "40px";
  } else {
    document.getElementById("menuToggle").style.top = "-50px";
  }
  prevScrollpos = currentScrollPos;
}
*/