var x = 0;
      document.getElementById("c").innerHTML = x;
      if (x < 6) {
        function add(val) {
          document.getElementById("hello").innerHTML +=
            "<li>" +
            val +
            "&nbsp <input type='button' value='X' onclick='remove()'></li>";
            x++;
            document.getElementById("c").innerText = x;
          
        }
        
          
        
      }
     
      

      // removing script
      function remove() {
        let listItem = document.getElementsByTagName("li");
        for (var i = 0; i < listItem.length; i++) {
          listItem[i].onclick = function () {
            this.parentNode.removeChild(this);
          };
        }
        x = x - 1;
        document.getElementById("c").innerHTML = x;
      }