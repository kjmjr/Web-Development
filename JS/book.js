//javascript file

//simply writing back the input when the info is typed in
function bookNow() {

   
    var name = document.getElementById('name_id').value;

    var number = document.getElementById('number_id').value;

    var stylist = document.getElementById('stylist_id').value;

    //prints the message
    document.write("Thanks for Booking with us today!");

   document.write("<br>");

    document.write("Name: " + name);

   document.write("<br>");

   document.write("Number: " + number);

    document.write("<br>");

    document.write("Stylist: " + stylist);

    document.write("<br>");
    
    document.write("Your name has been added to our list and we will get back "
       + " with you at our earliest convience!");

   
   

}


