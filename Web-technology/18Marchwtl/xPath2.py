from lxml import html

# Load the HTML file
html_file = "employees.html"
with open(html_file, "r", encoding="utf-8") as file:
    content = file.read()

tree = html.fromstring(content)

# XPath expressions to extract employee data
employee_rows = tree.xpath("//table/tr[position()>1]")  # Skip the header row

print("Employee Details:")
for row in employee_rows:
    emp_id = row.xpath("td[1]/text()")
    name = row.xpath("td[2]/text()")
    position = row.xpath("td[3]/text()")
    email = row.xpath("td[4]/text()")
    
    print(f"ID: {emp_id[0]}, Name: {name[0]}, Position: {position[0]}, Email: {email[0]}")