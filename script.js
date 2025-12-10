//topnav onscroll color script
document.addEventListener("DOMContentLoaded", () => {

    const nav = document.querySelector(".topnav");
    window.addEventListener("scroll", () => {
        if (window.scrollY > 50) nav.classList.add("scrolled");
        else nav.classList.remove("scrolled");
    });

//form script
    const form = document.querySelector(".contact-form");
    if (form) {
        form.addEventListener("submit", async (e) => {
            e.preventDefault();
            const formStatus = document.getElementById("form-status");

            let data = new FormData(form);

            const resp = await fetch("send.php", {
                method: "POST",
                body: data
            });

            const text = await resp.text();
            if (text === "OK") {
                formStatus.textContent = "Zpráva byla odeslána!";
                form.reset();
            } else {
                formStatus.textContent = "Nastala chyba.";
            }
        });
    }

    //copy mail to clipboard
    const email = "example@mail.com"; // ← sem vlož svůj e-mail

    const copyBtn = document.getElementById("cpymail");
    const statusDiv = document.getElementById("cpystat");

    copyBtn.addEventListener("click", async () => {
        try {
            await navigator.clipboard.writeText(email);

            statusDiv.textContent = "E-mail zkopírován do schránky.";
            statusDiv.style.opacity = "1";

            setTimeout(() => {
                statusDiv.textContent = "\n";
            }, 3000);

        } catch (err) {
            statusDiv.textContent = "Chyba: nepodařilo se zkopírovat.";
            setTimeout(() => {
                statusDiv.textContent = "\n";
            }, 3000);
        }
    });
});
