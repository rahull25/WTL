# Read employees.txt and process data
file_path = "employees.txt"

with open(file_path, "r", encoding="utf-8") as file:
    employees = [line.strip().split(", ") for line in file]

print("Employee Details:")
for emp in employees:
    emp_id, name, position, email = emp
    print(f"ID: {emp_id}, Name: {name}, Position: {position}, Email: {email}")
