$(document).ready(function() {
    $("#widowed").click(function() {
      $(".helt").show();
    });
    $("#divorced").click(function() {
      $(".helt").show();
    });
    $("#awaiting-divorce").click(function() {
      $(".helt").show();
    });
    $("#never-married").click(function() {
      $(".helt").hide();
    });
    $("#never-married").click(function() {
        $(".selt").show();
    });
    $("#widowed").click(function() {
        $(".selt").hide();
    });
    $("#divorced").click(function() {
        $(".selt").hide();
    });
    $("#awaiting-divorce").click(function() {
        $(".selt").hide();
    });
  });


  
document.addEventListener("DOMContentLoaded", function() {
    // Get all radio buttons by name
    const radioButtons = document.getElementsByName("optionsoutlined");
  
    // Loop through and uncheck each radio button
    radioButtons.forEach(function(radioButton) {
      radioButton.checked = false;
    });
  });
  
  document.addEventListener("DOMContentLoaded", function() {
      // Get all radio buttons by name
      const radioButtons = document.getElementsByName("optionsoutlined1");
    
      // Loop through and uncheck each radio button
      radioButtons.forEach(function(radioButton) {
        radioButton.checked = false;
      });
    });
  
    document.addEventListener("DOMContentLoaded", function() {
      // Get all radio buttons by name
      const radioButtons = document.getElementsByName("optionsoutlined2");
    
      // Loop through and uncheck each radio button
      radioButtons.forEach(function(radioButton) {
        radioButton.checked = false;
      });
    });
  
    document.addEventListener("DOMContentLoaded", function() {
      // Get all radio buttons by name
      const radioButtons = document.getElementsByName("optionsoutlined3");
    
      // Loop through and uncheck each radio button
      radioButtons.forEach(function(radioButton) {
        radioButton.checked = false;
      });
    });
  
    document.addEventListener("DOMContentLoaded", function() {
      // Get all radio buttons by name
      const radioButtons = document.getElementsByName("optionsoutlined4");
    
      // Loop through and uncheck each radio button
      radioButtons.forEach(function(radioButton) {
        radioButton.checked = false;
      });
    });
  
    document.addEventListener("DOMContentLoaded", function() {
      // Get all radio buttons by name
      const radioButtons = document.getElementsByName("optionsoutlined5");
    
      // Loop through and uncheck each radio button
      radioButtons.forEach(function(radioButton) {
        radioButton.checked = false;
      });
    });
  
    document.addEventListener("DOMContentLoaded", function() {
      // Get all radio buttons by name
      const radioButtons = document.getElementsByName("optionsoutlined6");
    
      // Loop through and uncheck each radio button
      radioButtons.forEach(function(radioButton) {
        radioButton.checked = false;
      });
    });

    function ads()
    {                                                                               
       
      var radios = document.getElementsByName('optionsoutlined');

      for (var i = 0; i < radios.length; i++) 
      {
        if (radios[i].checked) 
        {
          var m_s = radios[i].value;
        }
      }
       
      var radios = document.getElementsByName('optionsoutlined1');

      for (var i = 0; i < radios.length; i++) 
      {
        if (radios[i].checked) 
        {
          var n_o_c = radios[i].value;
        }
      }
       
      var radios = document.getElementsByName('optionsoutlined2');

      for (var i = 0; i < radios.length; i++) 
      {
        if (radios[i].checked) 
        {
          var l_w = radios[i].value;
        }
      }

      var ht = document.getElementById("f4").value;
       
      var radios = document.getElementsByName('optionsoutlined3');

      for (var i = 0; i < radios.length; i++) 
      {
        if (radios[i].checked) 
        {
          var f_s = radios[i].value;
        }
      }
       
      var radios = document.getElementsByName('optionsoutlined4');

      for (var i = 0; i < radios.length; i++) 
      {
        if (radios[i].checked) 
        {
          var f_t = radios[i].value;
        }
      }

      var radios = document.getElementsByName('optionsoutlined5');

      for (var i = 0; i < radios.length; i++) 
      {
        if (radios[i].checked) 
        {
          var f_v = radios[i].value;
        }
      }
       
      var radios = document.getElementsByName('optionsoutlined6');

      for (var i = 0; i < radios.length; i++) 
      {
        if (radios[i].checked) 
        {
          var a_d = radios[i].value;
        }
      }
     
        $.ajax({
            url: "insertproc1.php",
            data: {
                abc: m_s,
                f102: n_o_c,
                f103: l_w,
                f104: ht,
                f105: f_s,
                f106: f_t,
                f107: f_v,
                f108: a_d
            },
            type: 'POST',
success: function(result) 
{
  window.location.href = 'page5.php';
 
}
});
        
}

      