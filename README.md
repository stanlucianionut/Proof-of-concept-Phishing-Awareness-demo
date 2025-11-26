# Phishing Awareness Proof of Concept

## Overview
This project is an educational **phishing awareness demonstration** created for a graduation presentation.  
Its purpose is to show how a basic capture portal can trick users into providing information when presented in a believable context.

The demo highlights how social engineering works and why verifying links, URLs, and sources is essential for security.

---

## How It Works
1. A user receives a link that appears to be an **attendance confirmation page**.
2. When opened, the page requests the user's name.
3. After submission, the user is redirected to a *Thank You* page.
4. The submitted data (name + timestamp) is logged into a local CSV file.

This proof of concept does **not** collect passwords, sensitive data, or personal identifiers beyond a demo name input.  
It is designed strictly for controlled demonstration purposes.

---

## Project Structure
- `graduation-confirm.html` – Main phishing-awareness demo page where the user is asked to confirm attendance.
- `process.php` – Handles form submission and writes the user’s input and timestamp to the CSV log.
- `thank_you.html` – Redirect page shown after successful submission.
- `analyze_results.php` – Simple viewer for reviewing logged entries in the CSV file.
- `graduation_log.csv` – Generated log file containing captured demo data (name + timestamp).
- `bootcamp-logo.png` - Just IT company logo used in main page header for added credibility.

---

## Ethical Use
This project is for **education, awareness, and cybersecurity training only**.

Do not use this code:
- to target real users,
- outside of controlled environments,
- or without explicit permission.

Always follow ethical guidelines, legal standards, and responsible disclosure practices.

---

## Purpose
This demo serves as:
- a teaching tool for cybersecurity awareness,
- an example of how phishing lures operate,
- a reminder of how easily trust can be exploited.

It demonstrates why validating URLs, checking certificates, and being cautious about unsolicited requests is critical.

---

## Disclaimer
This repository is provided **solely for educational purposes**.  
The author is not responsible for any misuse or unauthorized application of this proof of concept.

## Screenshots
<img width="750" height="827" alt="image" src="https://github.com/user-attachments/assets/489e482f-19c7-46fc-b636-869f9f92b32c" />

<img width="840" height="864" alt="image" src="https://github.com/user-attachments/assets/d5faf3be-f06e-419b-9ceb-633c96a19a48" />

<img width="419" height="270" alt="image" src="https://github.com/user-attachments/assets/9233c7ca-94ce-4e02-a654-6997e6b9237d" />

