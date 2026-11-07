<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/withdraw.css?v=<?php echo time(); ?>">
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
                    <p class="Welcome-name">Earnings dashboard</p>
                    <p class="mini-welcome">Manage your earnings and request withdrawals.</p>
                </div>
            </section>
            <section class="card-wrapper">
                <section class="cards-section">
                    <div class="balance-card card">
                        <p class="card-tt">Available balance</p>
                        <p class="card-det">ksh 560</p>
                        <p class="mini-det">Ready to withdraw</p>
                    </div>
                    <div class="total-card card">
                        <p class="card-tt">Total earning</p>
                        <p class="card-det">ksh 6350</p>
                        <p class="mini-det">All time</p>
                    </div>
                    <div class="total-card card">
                        <p class="card-tt">Paid out</p>
                        <p class="card-det">ksh 5790</p>
                        <p class="mini-det">Succesfully withdrawn</p>
                    </div>
                    <div class="total-card card">
                        <p class="card-tt">Minimum</p>
                        <p class="card-det"> ksh 300</p>
                        <p class="mini-det"> Withdrawal limit </p>
                    </div>
                </section>
                <section class="referal-sect">
                    <div class="ref-separator">
                        <p class="Referal-tt">Request withdrawal</p>
                        <p class="refmini-tt">You can request a payout of your available earnings</p>
                    </div>
                    <button class="withdraw">Withdraw ⇓</button>
                </section>
                <Section class="Recent-act">
                    <div class="recent-tt">
                        <p class="recent-act">Payout history</p>
                    </div>
                    <div class="rec-mini">
                        <p>All</p>
                        <p>Pending</p>
                        <p>Completed</p>
                        <p>Failed</p>
                    </div>
                    <div class="rec-det">
                        <div class="mini-recwrapper">
                            <p class="amount-paid">ksh 430</p>
                            <p>1 november 2026</p>
                        </div>
                        <p class="wait">pending</p>
                    </div>
                    <div class="rec-det">
                        <div class="mini-recwrapper">
                            <p class="amount-paid">ksh 330</p>
                            <p>1 november 2026</p>
                        </div>
                        <p class="pass">completed</p>
                    </div>
                    <div class="rec-det">
                        <div class="mini-recwrapper">
                            <p class="amount-paid">ksh 1030</p>
                            <p>1 november 2026</p>
                        </div>
                        <p class="pass">completed</p>
                    </div>
                    <div class="rec-det">
                        <div class="mini-recwrapper">
                            <p class="amount-paid">ksh 130</p>
                            <p>1 november 2026</p>
                        </div>
                        <p class="fail">failed</p>
                    </div>
                    <div class="rec-det">
                        <div class="mini-recwrapper">
                            <p class="amount-paid">ksh 700</p>
                            <p>1 november 2026</p>
                        </div>
                        <p class="pass">completed</p>
                    </div>
                    <div class="rec-det">
                        <div class="mini-recwrapper">
                            <p class="amount-paid">ksh 300</p>
                            <p>1 november 2026</p>
                        </div>
                        <p class="pass">completed</p>
                    </div>
                    <div class="rec-det">
                        <div class="mini-recwrapper">
                            <p class="amount-paid">ksh 830</p>
                            <p>1 november 2026</p>
                        </div>
                        <p class="pass">completed</p>
                    </div>
                    <div class="rec-det">
                        <div class="mini-recwrapper">
                            <p class="amount-paid">ksh 30</p>
                            <p>1 november 2026</p>
                        </div>
                        <p class="fail">failed</p>
                    </div>
                </Section>
            </section>
        </Section>
    </section>
</body>

</html>