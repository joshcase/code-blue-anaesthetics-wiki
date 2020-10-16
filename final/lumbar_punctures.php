<html lang="en" style="font-family: 'Open Sans';">

	<head>
		<!--
		In the <head> tag, you may choose to load any files or other assets
		required for your page. You might also choose to set some page
		settings, such as the <title>.

		The text in here will not be visible in the user's browser.

		For now, let's put some settings in and load some files that I
		think are good for every beginner:
		-->

		<title>AnaestheticsWiki</title>

		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,700;1,400&display=swap" rel="stylesheet">

		<meta name="viewport" content="width=device-width, initial-scale=1">

	</head>


	<body style="margin: 0; display: flex; height: 100%;">
		<!--
		The actual content of your web page belongs in here, in the <body> tag.
		
		Your code starts below here:
		-->
		
		<?php include './includes/menu.html'; ?>

		<div style="padding: 40px;">
			<h1>How to perform a lumbar puncture safely</h1>
			<h2>A core skill for any anaesthetist</h2>
			<h3>Indications</h3>
			<ol>
				<li>CSF analysis</li>
				<li>Spinal epidural</li>
				<li>Spinal medications</li>
				<li>Fluid removal</li>
			</ol>
			<h3>Contraindications</h3>
			<ol>
				<li>Suspicion of raised intracranial pressure</li>
				<li>Anticoagulants</li>
				<li>Thrombocytopaenia</li>
				<li>Spinal abscesses</li>
				<li>Acute spinal cord trauma</li>
				<li>Congenital spinal abnormalities</li>
			</ol>
			<h3>Procedure</h3>
			<ol>
				<li>Check patient details</li>
				<li>Obtain informed consent</li>
				<li>Gather equipment and materials</li>
				<li>Map out landmarks (line between iliac crests is L4)</li>
				<li>Position the patient correctly in a lateral recumbent or prone position</li>
				<li>Clean the skin with chlorhexidine</li>
				<li>Inject local anaesthetic and wait a few minutes</li>
				<li>Confirm anaesthetic is successful</li>
				<li>Insert needle</li>
				<li>Remove CSF and insert into tubes</li>
				<li>Slowly remove needle and compress site with sterile gauze</li>
			</ol>
		</div>

	</body>

</html>