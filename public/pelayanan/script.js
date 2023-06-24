var jsonData = [
  {
    name: "John",
    desc: "aaaaa",
    status: "open",
  },
  {
    name: "Jane",
    desc: "aaaaa",
    status: "close",
  },
  {
    name: "Mark",
    desc: "aaaaa",
    status: "open",
  },
];

function loadJSON() {
  var output = document.getElementById("output");
  if (output.style.display === "none") {
    output.style.display = "block";
  } else {
    output.style.display = "none";
  }
}
function closeJSON() {
  var chart = document.getElementById("output");
  chart.style.display = "none";
}

function displayData(data) {
  var output = document.getElementById("output");
  output.innerHTML = "";

  var table = document.createElement("table");
  var thead = document.createElement("thead");
  var tbody = document.createElement("tbody");

  // Create search input in the table header
  var searchInput = document.createElement("input");
  searchInput.type = "text";
  searchInput.placeholder = "Search by name";
  searchInput.addEventListener("input", searchData);

  var searchRow = document.createElement("tr");
  var searchCell = document.createElement("th");
  searchCell.colSpan = 3;
  searchCell.appendChild(searchInput);
  searchRow.appendChild(searchCell);
  thead.appendChild(searchRow);

  // Iterate over data and create table rows
  data.forEach(function (item, index) {
    var row = document.createElement("tr");

    // Create table cells
    var indexCell = document.createElement("td");
    indexCell.textContent = index + 1;
    row.appendChild(indexCell);

    var nameCell = document.createElement("td");
    nameCell.textContent = item.name;
    row.appendChild(nameCell);

    var descCell = document.createElement("td");
    descCell.textContent = item.desc;
    row.appendChild(descCell);

    var statusCell = document.createElement("td");
    statusCell.textContent = item.status;
    if (item.status === "open") {
      statusCell.style.color = "green";
    } else {
      statusCell.style.color = "red";
    }
    row.appendChild(statusCell);

    // Append row to tbody
    tbody.appendChild(row);
  });

  table.appendChild(thead);
  table.appendChild(tbody);
  output.appendChild(table);
}
function searchData() {
  var searchInput = document.getElementById("searchInput").value.toLowerCase();
  var filteredData = jsonData.filter(function (item) {
    return item.name.toLowerCase().includes(searchInput);
  });

  displayData(filteredData);
}

// Chart
function loadCHART() {
  var output2 = document.getElementById("output2");
  if (output2.style.display === "none") {
    output2.style.display = "block";
  } else {
    output2.style.display = "none";
  }
}
function closeCHART() {
  var chart = document.getElementById("output2");
  chart.style.display = "none";
}
// faq
function loadFAQ() {
  var output3 = document.getElementById("output3");
  if (output3.style.display === "none") {
    output3.style.display = "block";
  } else {
    output3.style.display = "none";
  }
}
function closeFAQ() {
  var faq = document.getElementById("output3");
  faq.style.display = "none";
}
// form
function loadFORM() {
  var output4 = document.getElementById("output4");
  if (output4.style.display === "none") {
    output4.style.display = "block";
  } else {
    output4.style.display = "none";
  }
}
function closeFORM() {
  var form = document.getElementById("output4");
  form.style.display = "none";
}

// layanan
function loadLAYANAN() {
  var output5 = document.getElementById("output5");
  if (output5.style.display === "none") {
    output5.style.display = "block";
  } else {
    output5.style.display = "none";
  }
}
function closeLAYANAN() {
  var layanan = document.getElementById("output5");
  layanan.style.display = "none";
}
// hukum
function loadHUKUM() {
  var output6 = document.getElementById("output6");
  if (output6.style.display === "none") {
    output6.style.display = "block";
  } else {
    output6.style.display = "none";
  }
}
function closeHUKUM() {
  var hukum = document.getElementById("output6");
  hukum.style.display = "none";
}
