function randomMonth() {
  var months = ["January", "February", "March", "April", "May", "June", "July"];
  var random = Math.floor(Math.random() * months.length);
  $('[data-toggle="tooltip"]').tooltip({
    placement: "top",
    title: months[random],
  });
}

randomMonth();
