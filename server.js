// server.js
const express = require('express');
const bodyParser = require('body-parser');
const twilio = require('twilio');
require('dotenv').config();

const app = express();
const port = process.env.PORT || 3000;

const accountSid = process.env.TWILIO_ACCOUNT_SID;
const authToken = process.env.TWILIO_AUTH_TOKEN;
const twilioClient = twilio(accountSid, authToken);
const twilioWhatsAppNumber = process.env.TWILIO_WHATSAPP_NUMBER;

app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.json());

app.post('/send-whatsapp', (req, res) => {
    const { name, email, message, recipientNumber } = req.body;

    // Basic validation
    if (!name || !email || !message || !recipientNumber) {
        return res.status(400).json({ error: 'All fields are required.' });
    }

    // Format the recipient number
    const formattedNumber = recipientNumber.startsWith('+') ? recipientNumber : `+${recipientNumber}`;

    // Construct the message
    const whatsappMessage = `Name: ${name}\nEmail: ${email}\nMessage: ${message}`;

    // Send the message via Twilio
    twilioClient.messages.create({
        body: whatsappMessage,
        from: twilioWhatsAppNumber,
        to: `whatsapp:${formattedNumber}`,
    })
    .then(message => {
        console.log('Message sent with SID:', message.sid);
        res.status(200).json({ success: 'Message sent successfully!' });
    })
    .catch(err => {
        console.error('Error sending message:', err);
        res.status(500).json({ error: 'Failed to send message.' });
    });
});

app.listen(port, () => {
    console.log(`Server is running on port ${port}`);
});
