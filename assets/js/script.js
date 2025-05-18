
    function toggleStatus() {
      const statusText = document.getElementById("status-text");
      const button = document.getElementById("statusButton");
      const gradSection = document.getElementById("graduation-section");

if (statusText.innerText === "📚 Still Studying") {
        statusText.innerText = "🎓 Graduating";
        button.innerText = "Switch to Still Studying";
        gradSection.style.display = "flex";
} else {
        statusText.innerText = "📚 Still Studying";
        button.innerText = "Switch to Graduating";
        gradSection.style.display = "none";
}
    }
