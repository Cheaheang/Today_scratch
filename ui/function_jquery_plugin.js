$('overlay').css({
  "position": "absolute",
  "top": "0px",
  "left": "0px",
  "width": "30rem",
  "height": "30rem",
  "z-index": "1",
})

$('underneath').css({
  "position": "absolute",
  "top": "0px",
  "left": "0px",
    "height":"30rem",
  "width": "30rem",
  "z-index": "2",
})
 

$('#underneath').eraser({

  completeRatio: .65,
  completeFunction: myFunction,
});