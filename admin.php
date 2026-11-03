<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/admin.css?v=<?php echo time(); ?>">
    <title>Document</title>
</head>

<body>
    <section class="body-wrapper">
        <div class="Head-replace">
            <div class="Inner-head">
                <div class="MainTT"><span class="Work-icon"><a href="#Home">R</span>efearnTasks</a>
                </div>
                <div class="Header">
                    <span>ADMIN</span>
                    <a href="dashboard.php">▦ Overview</a>
                    <a href="referals.php">♧ My Referals</a>
                    <a href="">⁜ My tasks</a>
                    <a href="#withdraw-home">⇧ Withdrawals</a>
                </div>
            </div>
        </div>
        <Section class="dashboard-wrapper" id="withdraw-home">
            <section class="Intro-head">
                <div class="Welcome-note">
                    <p class="Welcome-name" id="greeting"></p>
                    <p class="mini-welcome">Here is a quick look of the activities.</p>
                </div>
            </section>
            <section class="card-wrapper">
                <section class="cards-section">
                    <div class="ref-card card">
                        <p class="card-tt">Total income</p>
                        <p class="card-det">ksh 310000</p>
                        <p class="mini-det">+2 this month</p>
                    </div>
                    <div class="total-card card">
                        <p class="card-tt">Expenses</p>
                        <p class="card-det">ksh 130050</p>
                        <p class="mini-det">All time</p>
                    </div>
                    <div class="total-card card">
                        <p class="card-tt">Available balance</p>
                        <p class="card-det">ksh 240050</p>
                        <p class="mini-det">Succesfully withdrawn</p>
                    </div>
                </section>
            </section>
        </Section>
    </section>
    <script>
        const currentHour = new Date().getHours();

        let greeting;

        if (currentHour >= 0 && currentHour < 12) {
            greeting = "Good morning";
        } else if (currentHour >= 12 && currentHour < 17) {
            greeting = "Good afternoon";
        } else if (currentHour >= 17 && currentHour < 21) {
            greeting = "Good evening";
        } else {
            greeting = "Good night";
        }

        document.getElementById("greeting").textContent =
            `${greeting}, Henry!`;
    </script>
</body>

</html>