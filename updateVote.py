import sys
import subprocess

#get the filename and vote from PHP (submitVote.php)
filename = sys.argv[1]  # qustions.txt
vote = sys.argv[2]
username = sys.argv[3]

#Compile the C++ code
compile_process = subprocess.run(["g++", "voteOnQuestion.cpp", "-o", "voteOnQuestion"], capture_output = True, text = True)

if compile_process.returncode != 0:
	print("Compiling Error: ", compile_process.stderr)
else:
	#Run the compiled C++ program (voteOnQuestion)
	run_process = subprocess.run(["./voteOnQuestion", filename, vote, username], capture_output = True, text = True)
	print("Output from c++:", run_process.stdout)