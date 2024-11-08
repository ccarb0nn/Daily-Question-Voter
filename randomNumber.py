import sys
import subprocess 


#Compile the C++ code
compile_process = subprocess.run(["g++", "randomNumber.cpp", "-o", "randomNumber"], capture_output = True, text = True)
	
if compile_process.returncode != 0:
	print("Compiling Error: ", compile_process.stderr)
else:
	#Run the compiled C++ program (randomNumber)
	run_process = subprocess.run(["./randomNumber"], capture_output = True, text = True)
	print(run_process.stdout)