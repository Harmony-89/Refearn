<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/AdRef.css?v=<?php echo time(); ?>">
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
                    <a href="admin.php">▦ Overview</a>
                    <a href="AdTrans.php">⇧ Referals</a>
                    <a href="AdRef.php">♧ Users</a>
                    <a href="">⁜ Transactions</a>
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
                        <p class="card-tt">Total users</p>
                        <p class="card-det">ksh 790</p>
                        <p class="mini-det">+2 this month</p>
                    </div>
                    <div class="total-card card">
                        <p class="card-tt">New users</p>
                        <p class="card-det">ksh 10</p>
                        <p class="mini-det">Past 7 days</p>
                    </div>
                    <div class="total-card card">
                        <p class="card-tt">Successful referals</p>
                        <p class="card-det">650</p>
                    </div>
                    <div class="total-card card">
                        <p class="card-tt">Pending referals</p>
                        <p class="card-det">5</p>
                    </div>
                </section>
                <Section class="Recent-act">
                    <div class="recent-tt">
                        <p class="recent-act">Recent activity</p>
                        <a href="" class="view-all">View all ↗</a>
                    </div>
                    <div class="rec-mini">
                        <p>Activity</p>
                        <p>Date</p>
                        <p>Status</p>
                    </div>
                    <div class="rec-det">
                        <p>ref#12-02928</p>
                        <p>1 november 2026</p>
                        <p class="wait">pending</p>
                    </div>
                    <div class="rec-det">
                        <p>ref#12-02028</p>
                        <p>27 november 2026</p>
                        <p class="pass">approved</p>
                    </div>
                    <div class="rec-det">
                        <p>ref#12-02078</p>
                        <p>25 november 2026</p>
                        <p class="pass">approved</p>
                    </div>
                </Section>
            </Section>
        </section>
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