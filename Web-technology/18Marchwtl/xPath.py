from lxml import etree


xml_file = "employees.xml"

tree = etree.parse(xml_file)

root = tree.getroot()

names = root.xpath("/employees/employee/name/text()")
print("Employee Names:", names)


employee_102 = root.xpath("/employees/employee[@id='102']/name/text()")
print("Employee 102 Name:", employee_102)

high_salary_employees = root.xpath("/employees/employee[salary > 50000]/name/text()")
print("Employees with salary > 50000:", high_salary_employees)
