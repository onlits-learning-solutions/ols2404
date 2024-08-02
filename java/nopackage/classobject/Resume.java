// Class    =   Recipe
public class Resume {
    private int id;
    private String name;
    private String address;
    private String mobile;
    private String _email;

    public int getId() {
        return id;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getName() {
        return name;
    }

    public void setAddress(String address) {
        this.address = address;
    }

    public String getAddress() {
        return address;
    }

    public void setMobile(String mobile) {
        this.mobile = mobile;
    }

    public String getMobile() {
        return mobile;
    }

    public void setEmail(String email) {
        _email = email;
    }

    public String getEmail() {
        return _email;
    }

    public void template1()
    {
        System.out.println(name);
        System.out.println(address + ", " + mobile + ", " + _email);
    }

    public void template2()
    {
        System.out.println(name);
        System.out.println(address);
        System.out.println(mobile);
        System.out.println(_email);
    }
}
