<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/dashb.css?v=<?php echo time(); ?>">
    <title>Document</title>
</head>

<body>
    <section class="body-wrapper">
        <div class="Head-replace">
            <div class="Inner-head">
                <div class="MainTT"><span class="Work-icon"><a href="#Home">R</span>efearnTasks</a>
                </div>
                <div class="Header">
                    <span>WORKSPACE</span>
                    <a href="#dash-home">▦ Overview</a>
                    <a href="referals.php">♧ My Referals</a>
                    <a href="">⁜ My tasks</a>
                    <a href="withdrawal.php">⇧ Withdrawals</a>
                </div>
            </div>
        </div>
        <Section class="dashboard-wrapper" id="dash-home">
            <section class="Intro-head">
                <div class="Welcome-note">
                    <p class="Welcome-name" id="greeting"></p>
                    <p class="mini-welcome">Welcome back. Here is a quick look of your activity.</p>
                </div>
            </section>
            <section class="card-wrapper">
                <section class="cards-section">
                    <div class="balance-card card">
                        <p class="card-tt">Available balance</p>
                        <p class="card-det">ksh 560</p>
                        <a href="withdrawal.php" class="withdraw-card">Request withdrawal</a>
                    </div>
                    <div class="total-card card">
                        <p class="card-tt">Total rewards</p>
                        <p class="card-det">ksh 2350</p>
                        <p class="mini-det">All rewards earned</p>
                    </div>
                    <div class="total-card card">
                        <p class="card-tt">Tasks completed</p>
                        <p class="card-det">13</p>
                        <p class="mini-det"></p>
                    </div>
                    <div class="ref-card card">
                        <p class="card-tt">Successful referals</p>
                        <p class="card-det">30</p>
                        <p class="mini-det">+2 this month</p>
                    </div>
                    <div class="pending-card card">
                        <p class="card-tt">Pending referals</p>
                        <p class="card-det">4</p>
                        <p class="mini-det"> Awaiting approval</p>
                    </div>
                </section>
                <section class="referal-sect">
                    <p class="Referal-tt">Your referal link</p>
                    <p class="refmini-tt">Earn ksh 300 per 10 successful referals</p>
                    <input type="text" placeholder="https://refearn.co.ke/register.php?ref=henry89">
                    <button>Copy link</button>
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
                    <div class="rec-det">
                        <p>ref#12-02028</p>
                        <p>20 november 2026</p>
                        <p class="pass">approved</p>
                    </div>
                    <div class="rec-det">
                        <p>ref#12-02011</p>
                        <p>19 november 2026</p>
                        <p class="pass">approved</p>
                    </div>
                    <div class="rec-det">
                        <p>ref#12-01998</p>
                        <p>16 september 2026</p>
                        <p class="pass">approved</p>
                    </div>
                </section>
            </section>
            <footer class="site-footer">
                <a class="brand" href="index.html">
                    <span class="brand-mark">R</span> ReferEarn</a>
                <span>© 2026 ReferEarn</span>
            </footer>
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
            `${greeting}, Henry`;
    </script>

</body>

</html>