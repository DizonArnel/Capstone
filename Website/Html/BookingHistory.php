<?php include '../../Includes/Header.php'; ?>

<section class="booking-history-container">
    <h2>Booking History</h2>
    <p>Here are all your past and current staycation bookings</p>


    <table class="booking-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Status</th>
                <th>Guests</th>
                <th>Arrival Date</th>
                <th>Leaving Date</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>

                <tr>
                    <td data-label="ID">1</td>
                    <td data-label="Name">Admin</td>
                    <td data-label="Phone">232</td>
                    <td data-label="Status"><span class="status pending">Pending</span></td>
                    <td data-label="Guests">2</td>
                    <td data-label="Arrival Date">2025-08-23</td>
                    <td data-label="Leaving Date">2025-08-24</td>
                    <td data-label="Action">
                    <button class="action-btn cancel">✖ Cancel</button>
                    </td>
                </tr>   
            <tr>
                <td data-label="ID">2</td>
                <td data-label="Name">Kian Santos</td>
                <td data-label="Phone">09563481472</td>
                <td data-label="Status"><span class="status approved">Approved</span></td>
                <td data-label="Guests">2</td>
                <td data-label="Arrival Date">2025-08-21</td>
                <td data-label="Leaving Date">2025-08-22</td>
                <td data-label="Action">
                <button class="action-btn cancel">✖ Cancel</button>
                </td>
            </tr>

        </tbody>
    </table>
</section>


<?php include '../../Includes/Footer.php'; ?>