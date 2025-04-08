import tkinter as tk

def open_second_window():
    second_window = tk.Toplevel(root)
    second_window.title("второе окно")

    label_red = tk.label(second_window, text="красный", bg="red", fg="white", width=20, height=10)
    label_green = tk.label(second_window, text="зеленый", bg="green", fg="white", width=20, height=10)
    label_blue = tk.label(second_window, text="синий", bg="blue", fg="white", width=20, height=10)

    label_red.grid(row=0, column=0)
    label_green.grid(row=0, column=1)
    label_blue.grid(row=0, column=2)
                                

root = tk.Tk()
root.title("главное окно")

label = tk.Label(root, text="это главное окно")
label.pack(pady=10)

var_checkbox = tk.IntVar()
checkbox = tk.Checkbutton(root, text="флажок", variable=var_checkbox)
checkbox.pack()

btn_open = tk.Button(root, text="открыть второе окно", command=open_second_window)
btn_open.pack(pady=10)

btn_exit = tk.Button(root, text="Выход", command=root.destroy)
btn_exit.pack(pady=10)

root.mainloop()
                     




