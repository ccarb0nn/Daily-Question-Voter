import sys
import subprocess

#get the filename and vote from PHP (submitVote.php)
filename = sys.argv[1]  # USERS.txt
username = sys.argv[2]

#Compile the C++ code
compile_process = subprocess.run(["g++", "verifyUsername.cpp", "-o", "verifyUsername"], capture_output = True, text = True)

if compile_process.returncode != 0:
	print("Compiling Error: ", compile_process.stderr)
else:
	#Run the compiled C++ program (verifyUsername)
	run_process = subprocess.run(["./verifyUsername", filename, username], capture_output = True, text = True)
	
	if run_process.returncode == 1:
		print("taken")
	else:
		print("available")