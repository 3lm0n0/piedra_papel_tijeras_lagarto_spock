function selected_option(selection_human) {

  if (selection_human==0) {
      var selection_human = 'Piedra';
  } else if ((selection_human==1) ) {
      var selection_human = 'Papel';
  } else if ((selection_human==2) ) {
      var selection_human = 'Tijeras';
  } else if ((selection_human==3) ) {
      var selection_human = 'Lagarto';
  } else if ((selection_human==4) ) {
      var selection_human = 'Spock';
  }

  var url = "enlace.php"
  var post = 1;

  var params = "selection_human="+selection_human; //PARAMETROS

  // fron-end check product content
  if (selection_human === undefined || selection_human == null || selection_human.length <= 0) {
      alert("Please Fill All Fields");
  } else {
      ajax(url,params,post);
  }
}
