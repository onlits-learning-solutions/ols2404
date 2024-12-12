public class TestResume {
    public static void main(String[] args) {
        Resume resume = new Resume();            //Object    =   Samosa
        resume.setName("Sachin Kumar");
        resume.setAddress("Muzaffarpur");
        resume.setMobile("8957458963");
        resume.setEmail("sachin.kumar@onlits.com");

        resume.template1();
        System.out.println();
        System.out.println("--------------------------");
        System.out.println();
        resume.template2();
    }
}
