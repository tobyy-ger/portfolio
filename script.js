document.addEventListener("DOMContentLoaded", () => {

    const nav = document.querySelector(".topnav");
    window.addEventListener("scroll", () => {
        if (window.scrollY > 50) nav.classList.add("scrolled");
        else nav.classList.remove("scrolled");
    });

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
    document.getElementById("cpymail").addEventListener("click", async () => {
        const mail = "tobiasger@seznam.cz";
        const status = document.getElementById("cpystat");

        if (!status) return;

        try {
            await navigator.clipboard.writeText(mail);
            status.textContent = "E-mail byl zkopírován do schránky!";
        } catch (err) {
            status.textContent = "Chyba kopírování.";
        }

        setTimeout(() => {
            status.textContent = "";
        }, 3000);
    });

});
