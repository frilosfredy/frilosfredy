
<div class="container">
     
    <div class="sidebar">
        <input type="text" id="sidebar-search" placeholder="Search..." onkeyup="filterLinks()">
        <a onclick="showContent('create_aadhar.php')">Check Aadhaar Status</a>
        <a onclick="showContent('link_aadhar.php')">Link Aadhaar User Manual</a>
        <a onclick="showContent('check_aadhar.php')">Check Aadhar PAN Card Link Status</a>
        <a onclick="showContent('update_aadhar.php')">Update aadhar</a>
        <a onclick="showContent('download_aadhar.php')">Download aadhar</a>
        <a onclick="showContent('income-tax-return')">Income Tax Return</a>
        <a onclick="showContent('verify-pan')">Verify Your PAN</a>
        <a onclick="showContent('Link-adhar')">Link Aadhar</a>
        <a onclick="showContent('pay-tax')">e-Pay Tax</a>
        <a onclick="showContent('income-tax-return')">Income Tax Return</a>
        <a onclick="showContent('verify-pan')">Verify Your PAN</a>
    </div>

    
    <style>
        /* Basic Styles */
        /* Search bar styling */

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        .header {
            background-color: #002e5b;
            color: #fff;
            padding: 10px;
            text-align: center;
            height: 70px;
        }
        #sidebar-search {
    width: 90%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 16px;
}
        .navbar, .sidebar a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }
        .container {
            display: flex;
            max-width: 1200px;
            margin: 20px auto;
        }
        .sidebar {
            flex: 1;
            background: #28527a;
            padding: 20px;
            width: 30%;
        }
        .sidebar a {
            display: block;
            padding: 10px;
            border-bottom: 1px solid #ddd;
            color: #fff;
            cursor: pointer;
        }
        /* .main-content {
            /* flex: 3; */
            /* background: #fff;
            padding: 20px;
            border: 1px solid #ddd; */
        /* } */
        .content-section {
            /* display: none; Hide all sections initially */
            visibility: hidden;
            display: none;
        }
        .content-section.active {
            display: block; /*Show active section*/
            visibility: visible;
        }
    </style>
<script>
    // JavaScript function to show the relevant content section
    function showContent(sectionId) {
        // Hide all content sections
        const sections = document.querySelectorAll('.content-section');
        sections.forEach(section => section.classList.remove('active'));
        
        // Show the selected section
        const selectedSection = document.getElementById(sectionId);
        selectedSection.classList.add('active');
    }

    // Filter sidebar links based on the search input
    function filterLinks() {
        const searchInput = document.getElementById('sidebar-search').value.toLowerCase(); // Get the search input
        const links = document.querySelectorAll('.sidebar a'); // Get all the links in the sidebar

        // Loop through all the links and hide those that don't match the search term
        links.forEach(link => {
            const linkText = link.textContent.toLowerCase();
            if (linkText.includes(searchInput)) {
                link.style.display = ''; // Show link if it matches
            } else {
                link.style.display = 'none'; // Hide link if it doesn't match
            }
        });
    }

    // Show default content on page load
    document.addEventListener("DOMContentLoaded", function() {
        showContent('verify-pan'); // Show "Verify Your PAN" section by default
    });
</script> 



