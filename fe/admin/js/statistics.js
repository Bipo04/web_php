// // Danh so va chuyen trang cho table1
// document.addEventListener("DOMContentLoaded", function () {
//     var tableRows = document.querySelectorAll(".table1 #data1 tr");
//     var maxRows = 10;
//     var currentPage = 1;

//     function showRows(page) {
//         var start = (page - 1) * maxRows;
//         var end = start + maxRows;

//         tableRows.forEach(function (row, index) {
//             if (index >= start && index < end) {
//                 row.style.display = "table-row";
//             } else {
//                 row.style.display = "none";
//             }
//         });

//         var totalRows = tableRows.length;
//         var totalPages = Math.ceil(totalRows / maxRows);

//         var pageInfo = document.getElementById("pageInfo");
//         if (totalPages >= 1) {
//             pageInfo.textContent = "Trang " + page + "/" + totalPages;
//             pageInfo.style.display = "inline"; // Hiển thị thông tin trang
//         } else {
//             pageInfo.style.display = "none"; // Ẩn thông tin trang nếu chỉ có một trang
//         }

//         var previousButton = document.getElementById("previousButton");
//         var nextButton = document.getElementById("nextButton");
//     }

//     showRows(currentPage);

//     document.getElementById("previousButton").addEventListener("click", function () {
//         if (currentPage > 1) {
//             currentPage--;
//             showRows(currentPage);
//         }
//     });

//     document.getElementById("nextButton").addEventListener("click", function () {
//         var totalRows = tableRows.length;
//         var totalPages = Math.ceil(totalRows / maxRows);

//         if (currentPage < totalPages) {
//             currentPage++;
//             showRows(currentPage);
//         }
//     });
// });
// document.addEventListener("DOMContentLoaded", function () {
//     var tableRows = document.querySelectorAll(".table1 #data2 tr");
//     var maxRows = 10;
//     var currentPage = 1;

//     function showRows(page) {
//         var start = (page - 1) * maxRows;
//         var end = start + maxRows;

//         tableRows.forEach(function (row, index) {
//             if (index >= start && index < end) {
//                 row.style.display = "table-row";
//             } else {
//                 row.style.display = "none";
//             }
//         });

//         var totalRows = tableRows.length;
//         var totalPages = Math.ceil(totalRows / maxRows);

//         var pageInfo = document.getElementById("pageInfo");
//         if (totalPages >= 1) {
//             pageInfo.textContent = "Trang " + page + "/" + totalPages;
//             pageInfo.style.display = "inline"; // Hiển thị thông tin trang
//         } else {
//             pageInfo.style.display = "none"; // Ẩn thông tin trang nếu chỉ có một trang
//         }

//         var previousButton = document.getElementById("previousButton");
//         var nextButton = document.getElementById("nextButton");
//     }

//     showRows(currentPage);

//     document.getElementById("previousButton").addEventListener("click", function () {
//         if (currentPage > 1) {
//             currentPage--;
//             showRows(currentPage);
//         }
//     });

//     document.getElementById("nextButton").addEventListener("click", function () {
//         var totalRows = tableRows.length;
//         var totalPages = Math.ceil(totalRows / maxRows);

//         if (currentPage < totalPages) {
//             currentPage++;
//             showRows(currentPage);
//         }
//     });
// });
// document.addEventListener("DOMContentLoaded", function () {
//     var tableRows = document.querySelectorAll(".table1 #data3 tr");
//     var maxRows = 10;
//     var currentPage = 1;

//     function showRows(page) {
//         var start = (page - 1) * maxRows;
//         var end = start + maxRows;

//         tableRows.forEach(function (row, index) {
//             if (index >= start && index < end) {
//                 row.style.display = "table-row";
//             } else {
//                 row.style.display = "none";
//             }
//         });

//         var totalRows = tableRows.length;
//         var totalPages = Math.ceil(totalRows / maxRows);

//         var pageInfo = document.getElementById("pageInfo");
//         if (totalPages >= 1) {
//             pageInfo.textContent = "Trang " + page + "/" + totalPages;
//             pageInfo.style.display = "inline"; // Hiển thị thông tin trang
//         } else {
//             pageInfo.style.display = "none"; // Ẩn thông tin trang nếu chỉ có một trang
//         }

//         var previousButton = document.getElementById("previousButton");
//         var nextButton = document.getElementById("nextButton");
//     }

//     showRows(currentPage);

//     document.getElementById("previousButton").addEventListener("click", function () {
//         if (currentPage > 1) {
//             currentPage--;
//             showRows(currentPage);
//         }
//     });

//     document.getElementById("nextButton").addEventListener("click", function () {
//         var totalRows = tableRows.length;
//         var totalPages = Math.ceil(totalRows / maxRows);

//         if (currentPage < totalPages) {
//             currentPage++;
//             showRows(currentPage);
//         }
//     });
// });
// document.addEventListener("DOMContentLoaded", function () {
//     var tableRows = document.querySelectorAll(".table1 #data4 tr");
//     var maxRows = 10;
//     var currentPage = 1;

//     function showRows(page) {
//         var start = (page - 1) * maxRows;
//         var end = start + maxRows;

//         tableRows.forEach(function (row, index) {
//             if (index >= start && index < end) {
//                 row.style.display = "table-row";
//             } else {
//                 row.style.display = "none";
//             }
//         });

//         var totalRows = tableRows.length;
//         var totalPages = Math.ceil(totalRows / maxRows);

//         var pageInfo = document.getElementById("pageInfo");
//         if (totalPages >= 1) {
//             pageInfo.textContent = "Trang " + page + "/" + totalPages;
//             pageInfo.style.display = "inline"; // Hiển thị thông tin trang
//         } else {
//             pageInfo.style.display = "none"; // Ẩn thông tin trang nếu chỉ có một trang
//         }

//         var previousButton = document.getElementById("previousButton");
//         var nextButton = document.getElementById("nextButton");
//     }

//     showRows(currentPage);

//     document.getElementById("previousButton").addEventListener("click", function () {
//         if (currentPage > 1) {
//             currentPage--;
//             showRows(currentPage);
//         }
//     });

//     document.getElementById("nextButton").addEventListener("click", function () {
//         var totalRows = tableRows.length;
//         var totalPages = Math.ceil(totalRows / maxRows);

//         if (currentPage < totalPages) {
//             currentPage++;
//             showRows(currentPage);
//         }
//     });
// });
document.addEventListener("DOMContentLoaded", function () {
    var currentPage = 1;

    function showRows(page) {
        var tableBody = document.getElementById("data" + page);
        var tableRows = tableBody.querySelectorAll("tr");
        var maxRows = 10;

        tableRows.forEach(function (row, index) {
            if (index < maxRows) {
                row.style.display = "table-row";
            } else {
                row.style.display = "none";
            }
        });

        var totalRows = tableRows.length;
        var totalPages = Math.ceil(totalRows / maxRows);

        var pageInfo = document.getElementById("pageInfo");
        pageInfo.textContent = "Trang " + page + "/" + totalPages;

        var previousButton = document.getElementById("previousButton");
        var nextButton = document.getElementById("nextButton");

        previousButton.disabled = page === 1;
        nextButton.disabled = page === totalPages;
    }

    // Hiển thị trang đầu tiên khi trang web được tải
    showRows(currentPage);

    // Xử lý sự kiện khi nhấn nút "Trang trước"
    document.getElementById("previousButton").addEventListener("click", function () {
        if (currentPage > 1) {
            currentPage--;
            showRows(currentPage);
        }
    });

    // Xử lý sự kiện khi nhấn nút "Trang tiếp theo"
    document.getElementById("nextButton").addEventListener("click", function () {
        var nextPage = currentPage + 1;
        var nextTableBody = document.getElementById("data" + nextPage);

        if (nextTableBody) {
            currentPage++;
            showRows(currentPage);
        }
    });
});

// Select Tat ca , Ngay , Thang , Nam
document.addEventListener("DOMContentLoaded", function () {
    var selectOption = document.getElementById('selectOption');
    var tbodyList = document.querySelectorAll('.content-table tbody');

    selectOption.addEventListener('change', function () {
        var selectedValue = this.value;

        // Ẩn tất cả các tbody
        tbodyList.forEach(function (tbody) {
            tbody.classList.add('hidden');
        });

        // Hiển thị tbody tương ứng với giá trị được chọn
        var selectedTbody = document.getElementById('data' + selectedValue);
        if (selectedTbody) {
            selectedTbody.classList.remove('hidden');
        }
    });
});
// Danh so va chuyen trang cho table2
document.addEventListener("DOMContentLoaded", function () {
    var tableRows = document.querySelectorAll(".TopSellingProduct tbody tr");
    var maxRows = 5;
    var currentPage = 1;

    function showRows(page) {
        var start = (page - 1) * maxRows;
        var end = start + maxRows;

        tableRows.forEach(function (row, index) {
            if (index >= start && index < end) {
                row.style.display = "table-row";
            } else {
                row.style.display = "none";
            }
        });

        var totalRows = tableRows.length;
        var totalPages = Math.ceil(totalRows / maxRows);

        var pageInfo = document.getElementById("pageInfo1");
        if (totalPages >= 1) {
            pageInfo.textContent = "Trang " + page + "/" + totalPages;
            pageInfo.style.display = "inline"; // Hiển thị thông tin trang
        } else {
            pageInfo.style.display = "none"; // Ẩn thông tin trang nếu chỉ có một trang
        }

        var previousButton = document.getElementById("previousButton1");
        var nextButton = document.getElementById("nextButton1");
    }

    showRows(currentPage);

    document.getElementById("previousButton1").addEventListener("click", function () {
        if (currentPage > 1) {
            currentPage--;
            showRows(currentPage);
        }
    });

    document.getElementById("nextButton1").addEventListener("click", function () {
        var totalRows = tableRows.length;
        var totalPages = Math.ceil(totalRows / maxRows);

        if (currentPage < totalPages) {
            currentPage++;
            showRows(currentPage);
        }
    });
});