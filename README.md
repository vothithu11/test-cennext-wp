# Cennos TMS WordPress Developer Assessment

## Overview

You are provided with a starter WordPress theme based on a typical real-world setup.

Your task is to complete and fix the theme to match a provided homepage design.

This test evaluates your ability to:

* Work with WordPress theme structure
* Use SCSS and modern frontend workflow (Gulp)
* Debug JavaScript and CSS issues
* Implement dynamic content using ACF
* Build responsive layouts

---

## Getting Started

1. Read the task requirement and make sure you can access Wordpress admin, SFTP
2. Open the TMS_Web_Dev_Interview.fig in folder theme to understand how you should build the page
3. The theme use Gulp (task runner) to compile SCSS/JS so you need to download the theme to your local machine, build and upload it back to staging server
4. Visit [Node.js official website](https://nodejs.org/en) and download the LTS (Long Term Support) version
5. Open Command Prompt (CMD) or PowerShell and verify

```bash
node -v
npm -v
```

6. Install Gulp CLI Globally

```bash
npm install --global gulp-cli
```

7. In Command Prompt (CMD) or PowerShell, cd to your theme folder and run to start development

```bash
npm install
gulp
```

Now everytime you update SCSS or JS, Gulp will watch for changes and compile assets automatically.

---

## Tasks

### 1. Fix Frontend Issues

There are intentional issues in the theme.

* Fix layout and styling problems (SCSS)
* Fix JavaScript errors
* Ensure all interactions work correctly

---

### 2. Build Homepage from Mockup

You will be provided with a homepage design.

Implement the homepage using WordPress best practices.

#### Required Sections:

* Header (responsive menu)
* Hero / Slideshow
* 2-column content section
* **Our Gallery** (image carousel with hover description)
* **Our Services** (vertical tabs: title on left, content on right)
* Footer

---

### 3. Use ACF (Advanced Custom Fields)

#### Requirements:

* No hardcoded content
* All dynamic sections must be editable via WordPress admin
* Use appropriate field types (repeater, image, text, etc.)

---

### 4. Follow Best Practices

* Use proper WordPress template structure
* Keep code clean and readable
* Avoid unnecessary libraries
* Ensure responsiveness (mobile-friendly)

---

## Technical Notes

* SCSS is located in: `assets/scss/`
* JavaScript is located in: `assets/js/`
* Compiled assets output to: `assets/dist/`
* Do not modify the build system unless necessary

---

## Submission

Please provide:

* Modified version of the theme should be activated in staging site
* Any notes or assumptions (optional)

---

## Evaluation Criteria

Your submission will be evaluated based on:

* Functionality (does everything work?)
* Code quality and structure
* Use of WordPress best practices
* Proper use of ACF
* Responsiveness and UI accuracy
* Debugging ability

---

## Notes

* You are free to use any resources
* Focus on clean, maintainable solutions
* If something is unclear, make reasonable assumptions

---

Good luck!