<form id="contactForm">

    <div class="form-group">
        <label for="email">E-Mail</label>
        <input type="email" id="email" name="email" placeholder="name@email.com" required>
    </div>


    <div class="form-group">
        <div class="form-group">
            <label for="phone">Phone Number (Swiss):</label><br>
            <input type="tel" id="phone" placeholder="041 079 123 45 67" name="phone" pattern="[0-9]{3} [0-9]{3} [0-9]{3} [0-9]{2} [0-9]{2}">
        </div>

        <script>
            // Function to automatically add spaces to the phone number input
            document.getElementById('phone').addEventListener('input', function(e) {
                let x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,3})(\d{0,2})(\d{0,2})/);
                e.target.value = !x[2] ? x[1] : x[1] + ' ' + x[2] + (x[3] ? ' ' + x[3] + (x[4] ? ' ' + x[4] + (x[5] ? ' ' + x[5] : '') : '') : '') + (x[6] ? ' ' + x[6] + (x[7] ? ' ' + x[7] : '') : '');
            });
        </script>

    </div>

    <button type="submit">Next</button>

</form>





<form id="contactForm">

    <div class="form-group">
        <label for="options">Regarding</label>
        <select id="options" name="options" required>
            <option value="">Select Option</option>
            <option value="option1">Job Offer</option>
            <option value="option2">Question Regarding Assets</option>
            <option value="option3">Other</option>
        </select>
    </div>

    <div class="form-group">
        <label for="message">Your Message</label>
        <textarea id="message" name="message" required></textarea>
    </div>


    <button type="submit">Next</button>

</form>