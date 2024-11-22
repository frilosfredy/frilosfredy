<script>
    
const translations = {
    en: {
        checkAadhaarStatus: "Check Aadhaar Status",
        linkAadhaarManual: "Link Aadhaar User Manual",
        checkAadhaarPan: "Check Aadhaar PAN Card Link Status",
        updateAadhaar: "Update Aadhaar",
        downloadAadhaar: "Download Aadhaar",
        incomeTaxReturn: "Income Tax Return",
        verifyPan: "Verify Your PAN",
        linkAadhaar: "Link Aadhaar",
        payTax: "Pay Tax",
        login:"login",
        signup:"signup"
        
    },
    ml: {
        checkAadhaarStatus: "ആധാർ നില പരിശോധിക്കുക",
        linkAadhaarManual: "ആധാർ ഉപയോക്തൃ മാനുവൽ",
        checkAadhaarPan: "ആധാർ PAN കാർഡ് ലിങ്ക് നില പരിശോധിക്കുക",
        updateAadhaar: "ആധാർ അപ്ഡേറ്റ് ചെയ്യുക",
        downloadAadhaar: "ആധാർ ഡൗൺലോഡ് ചെയ്യുക",
        incomeTaxReturn: "ഇൻകം ടാക്സ് റിട്ടേൺ",
        verifyPan: "PAN ശരീകരിക്കുക",
        linkAadhaar: "ആധാർ ലിങ്ക് ചെയ്യുക",
        payTax: "നികുതി അടയ്ക്കുക",
        login:"ലോഗിൻ",
        signup:"സൈൻഅപ്പ്"
    
    },
};
</script>

<div class="container">
     
<div class="sidebar">
    <input type="text" id="sidebar-search" placeholder="Search..." onkeyup="filterLinks()">
    <a id="check-aadhaar-status" onclick="showContent('create_aadhar.php')"></a>
    <a id="link-aadhaar-manual" onclick="showContent('link_aadhar.php')"></a>
    <a id="check-aadhaar-pan" onclick="showContent('check_aadhar.php')"></a>
    <a id="update-aadhaar" onclick="showContent('update_aadhar.php')"></a>
    <a id="download-aadhaar" onclick="showContent('download_aadhar.php')"></a>
    <a id="income-tax-return" onclick="showContent('income-tax-return')"></a>
    <a id="verify-pan" onclick="showContent('verify-pan')"></a>
    <a id="link-aadhaar" onclick="showContent('Link-adhar')"></a>
    <a id="pay-tax" onclick="showContent('pay-tax')"></a>
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
            background: #062340;
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
     function changeLanguage(language) {
    // Update the sidebar content based on the selected language
    document.getElementById("check-aadhaar-status").textContent = translations[language].checkAadhaarStatus;
    document.getElementById("link-aadhaar-manual").textContent = translations[language].linkAadhaarManual;
    document.getElementById("check-aadhaar-pan").textContent = translations[language].checkAadhaarPan;
    document.getElementById("update-aadhaar").textContent = translations[language].updateAadhaar;
    document.getElementById("download-aadhaar").textContent = translations[language].downloadAadhaar;
    document.getElementById("income-tax-return").textContent = translations[language].incomeTaxReturn;
    document.getElementById("verify-pan").textContent = translations[language].verifyPan;
    document.getElementById("link-aadhaar").textContent = translations[language].linkAadhaar;
    document.getElementById("pay-tax").textContent = translations[language].payTax;

    // Update the search placeholder
    document.getElementById("sidebar-search").placeholder =
        language === "en" ? "Search..." : "തിരയുക...";
}

// Set the default language to English on page load
document.addEventListener("DOMContentLoaded", function () {
    changeLanguage("en"); // Default language
});
</script>

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
