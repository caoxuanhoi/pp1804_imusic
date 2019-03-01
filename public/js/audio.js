// $( "#music" ).click(function() {
//     var d = $(this).data('link'); 

//     console.log(d);
//     // alert( "Handler for .click() called.".a );
//   });

function music(id) {
    let datalink = $("#music"+id).attr("data-url");
    let audio = $("#head_music").attr('src', datalink);
    audio[0].play();
  }

  function musictab(id) {
      // vao website tim thang ID co ten la musictab{id} sau do tim attribute la data-url va lay noi dung trong dau ngoac kep.
    let datalink = $("#musictab"+id).attr("data-url");
    // vao website tim thang id co ten la head_music sau do them cai atriibute la src=link vua lay o tren
    let audio = $("#head_music").attr('src', datalink);
    audio[0].play();
  }

  function song(id) {
    let datalink = $("#song"+id).attr("data-url");
    let audio = $("#head_music").attr('src', datalink);
    audio[0].play();
  }
