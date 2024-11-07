import sys
import subprocess 

#get the filename and vote from PHP (submitVote.php)
#filename = sys.argv[1]  # qustions.txt
#vote = sys.argv[2]

#Compile the C++ code
compile_process = subprocess.run(["g++", "questionOfTheDay.cpp", "-o", "questionOfTheDay"], capture_output = True, text = True)

if compile_process.returncode != 0:
	print("Compiling Error: ", compile_process.stderr)
else:
	#Run the compiled C++ program (questionOfTheDay)
	run_process = subprocess.run(["./questionOfTheDay"], capture_output = True, text = True)
	print("Output from c++:", run_process.stdout)

	#check for errors
	if run_process.stderr:
		print("Error:")
		print(run_process.stderr)



