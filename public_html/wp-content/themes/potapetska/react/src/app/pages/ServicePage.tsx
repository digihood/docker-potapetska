import { Header } from "../components/Header";
import { Footer } from "../components/Footer";
import { SimpleContactForm } from "../components/SimpleContactForm";

const EXCAVATOR_IMG = "https://images.unsplash.com/photo-1749899518796-0e57ff2244f2?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxleGNhdmF0b3IlMjBjb25zdHJ1Y3Rpb24lMjBzaXRlJTIwd2F0ZXJ8ZW58MXx8fHwxNzcyMTE1MTU2fDA&ixlib=rb-4.1.0&q=80&w=600";
const SERVICE_IMG = "https://images.unsplash.com/photo-1581094271901-8022df4466f9?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=800";

const projects = [
  {
    title: "Sanace pilířů Karlova mostu",
    category: "Stavební práce",
    location: "Praha",
    date: "2018–2021",
    desc: "Komplexní podvodní sanace historických mostních pilířů – injektáže, torkret beton, hydroizolace.",
  },
  {
    title: "Revize VD Orlík",
    category: "Stavební práce",
    location: "Jihočeský kraj",
    date: "Opakovaně",
    desc: "Pravidelné inspekce a opravy těsnění hráze vodního díla Orlík pro správce Povodí Vltavy.",
  },
  {
    title: "Prager Metrostav – tunelové sifony",
    category: "Stavební práce",
    location: "Praha",
    date: "2015–2019",
    desc: "Práce v tunelech pražského metra bez volné hladiny, čerpání zaplavených úseků.",
  },
];

const clients = [
  "Povodí Vltavy, s.p.",
  "ČEZ, a.s.",
  "Metrostav a.s.",
  "Kloknerův ústav ČVUT",
  "Správa železnic",
  "Ředitelství silnic a dálnic",
  "Praha – hl. město",
  "Technická správa komunikací",
];

const reasons = [
  {
    title: "Vlastní technické zázemí",
    desc: "Nejsme závislí na subdodávkách. Vše pod kontrolou – od přileb Kirby Morgan po VT agregáty 800 bar.",
  },
  {
    title: "Certifikovaní profesionálové",
    desc: "Každý z našich potápěčů má platné osvědčení a průběžně se školí v nejnovějších technikách.",
  },
  {
    title: "Zkušenosti z extrémů",
    desc: "Karlův most, Orlík, Metro Praha – projekty, které jiní odmítli. To je naše každodenní práce.",
  },
  {
    title: "Komplexní řešení na klíč",
    desc: "Od průzkumu až po konečnou dokumentaci. Jeden partner, žádné komplikace.",
  },
  {
    title: "Dostupnost 24/7",
    desc: "Havárie nečekají na pracovní dobu. Jsme připraveni vyrazit kdykoli.",
  },
  {
    title: "Bezpečnost na prvním místě",
    desc: "ISO certifikace, pravidelné audity, nulová tolerance k improvizaci.",
  },
  {
    title: "Reference od státních institucí",
    desc: "Důvěra od Povodí Vltavy, ČEZ, Metrostav – ti nevolí náhodně.",
  },
  {
    title: "Moderní technologie",
    desc: "Podmořské ROV, hydraulické vrtné soupravy, diagnostika 21. století.",
  },
];

export function ServicePage() {
  const sliderSettings = {
    dots: true,
    infinite: true,
    speed: 500,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: false,
    arrows: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          arrows: true,
        },
      },
      {
        breakpoint: 640,
        settings: {
          slidesToShow: 1,
          arrows: true,
        },
      },
    ],
  };

  return (
    <div
      style={{
        fontFamily: "'Barlow', sans-serif",
        overflowX: "hidden",
        minWidth: "320px",
      }}
    >
      <Header />
      
      <main>
        {/* 1. Hero Section */}
        <section
          style={{
            background: "linear-gradient(135deg, #033869 0%, #022d5e 100%)",
            padding: "140px 0 100px",
            position: "relative",
            overflow: "hidden",
          }}
        >
          <div
            style={{
              position: "absolute",
              inset: 0,
              backgroundImage: `url(${SERVICE_IMG})`,
              backgroundSize: "cover",
              backgroundPosition: "center",
              opacity: 0.08,
            }}
          />
          <div className="max-w-screen-xl mx-auto px-6" style={{ position: "relative", zIndex: 1 }}>
            <div style={{ maxWidth: "800px" }}>
              <div style={{ display: "flex", alignItems: "center", gap: "10px", marginBottom: "20px" }}>
                <div style={{ width: "36px", height: "3px", background: "#fcdb00" }} />
                <span
                  style={{
                    color: "#fcdb00",
                    fontSize: "0.78rem",
                    fontWeight: 700,
                    letterSpacing: "0.16em",
                    textTransform: "uppercase",
                  }}
                >
                  Naše služby
                </span>
              </div>
              <h1
                style={{
                  fontFamily: "'Barlow Condensed', sans-serif",
                  fontSize: "clamp(2.5rem, 5vw, 4rem)",
                  fontWeight: 800,
                  color: "#ffffff",
                  textTransform: "uppercase",
                  lineHeight: 1.1,
                  marginBottom: "24px",
                }}
              >
                Stavební potápěčské práce
              </h1>
              <p
                style={{
                  color: "rgba(226,232,240,0.85)",
                  fontSize: "1.15rem",
                  lineHeight: 1.7,
                  marginBottom: "36px",
                }}
              >
                Komplexní podvodní stavební práce – sanace pilířů mostů, hráze, tunelové úseky. 
                Tam, kde ostatní vidí překážku, my vidíme řešení. S vlastním zázemím a 30 lety praxe.
              </p>
              <a
                href="#kontakt"
                onClick={(e) => {
                  e.preventDefault();
                  document.querySelector("#kontakt")?.scrollIntoView({ behavior: "smooth" });
                }}
                style={{
                  display: "inline-flex",
                  alignItems: "center",
                  gap: "10px",
                  background: "#fcdb00",
                  color: "#033869",
                  fontFamily: "'Barlow', sans-serif",
                  fontSize: "0.9rem",
                  fontWeight: 700,
                  letterSpacing: "0.1em",
                  textTransform: "uppercase",
                  textDecoration: "none",
                  padding: "16px 36px",
                  borderRadius: "3px",
                  transition: "all 0.2s",
                }}
                onMouseEnter={(e) => {
                  (e.currentTarget as HTMLElement).style.background = "#e5c500";
                }}
                onMouseLeave={(e) => {
                  (e.currentTarget as HTMLElement).style.background = "#fcdb00";
                }}
              >
                Poptat službu
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2.5">
                  <path d="M5 12h14M12 5l7 7-7 7" />
                </svg>
              </a>
            </div>
          </div>
        </section>

        {/* 2. Service Explanation Section */}
        <section
          style={{
            background: "#ffffff",
            padding: "100px 0",
          }}
        >
          <div className="max-w-screen-xl mx-auto px-6">
            <div
              style={{
                display: "grid",
                gridTemplateColumns: "1fr 1fr",
                gap: "64px",
                alignItems: "center",
              }}
              className="lg:grid-cols-2 md:grid-cols-1"
            >
              {/* Left: Text */}
              <div>
                <div style={{ display: "flex", alignItems: "center", gap: "10px", marginBottom: "16px" }}>
                  <div style={{ width: "36px", height: "3px", background: "#fcdb00" }} />
                  <span
                    style={{
                      color: "#033869",
                      fontSize: "0.78rem",
                      fontWeight: 700,
                      letterSpacing: "0.16em",
                      textTransform: "uppercase",
                    }}
                  >
                    Co zahrnuje služba
                  </span>
                </div>
                <h2
                  style={{
                    fontFamily: "'Barlow Condensed', sans-serif",
                    fontSize: "clamp(2rem, 3.5vw, 3rem)",
                    fontWeight: 800,
                    color: "#033869",
                    textTransform: "uppercase",
                    lineHeight: 1.1,
                    marginBottom: "24px",
                  }}
                >
                  Podvodní stavební práce
                  <br />
                  <span style={{ color: "#42454e" }}>pro náročné projekty</span>
                </h2>
                <p style={{ color: "#6b7280", fontSize: "1rem", lineHeight: 1.8, marginBottom: "24px" }}>
                  Stavební potápěčské práce vyžadují nejen technickou zdatnost, ale především zkušenosti 
                  a spolehlivé zázemí. Specializujeme se na sanace mostních pilířů, opravy hrází vodních děl, 
                  tunelové úseky a další podvodní stavební aktivity.
                </p>
                <p style={{ color: "#6b7280", fontSize: "1rem", lineHeight: 1.8, marginBottom: "28px" }}>
                  Každý projekt začíná podrobným průzkumem a technickou analýzou. Následuje příprava 
                  technologie, koordinace s dalšími profesemi a vlastní realizace. Garantujeme kvalitu, 
                  dodržení termínů a kompletní dokumentaci.
                </p>

                {/* Key points */}
                <div style={{ display: "flex", flexDirection: "column", gap: "14px" }}>
                  {[
                    "Sanace mostních pilířů a opěr",
                    "Opravy hrází a vodních děl",
                    "Tunelové a kanalizační úseky",
                    "Injektáže a torkretování pod vodou",
                    "Hydroizolace a utěsnění",
                  ].map((item, i) => (
                    <div key={i} style={{ display: "flex", alignItems: "center", gap: "12px" }}>
                      <div
                        style={{
                          width: "8px",
                          height: "8px",
                          background: "#fcdb00",
                          borderRadius: "50%",
                          flexShrink: 0,
                        }}
                      />
                      <span style={{ color: "#033869", fontSize: "0.95rem", fontWeight: 600 }}>
                        {item}
                      </span>
                    </div>
                  ))}
                </div>
              </div>

              {/* Right: Image */}
              <div
                style={{
                  borderRadius: "4px",
                  overflow: "hidden",
                  boxShadow: "0 20px 60px rgba(3,56,105,0.15)",
                }}
              >
                <img
                  src={SERVICE_IMG}
                  alt="Stavební potápěčské práce"
                  style={{
                    width: "100%",
                    height: "500px",
                    objectFit: "cover",
                    display: "block",
                  }}
                />
              </div>
            </div>
          </div>
        </section>

        {/* 3. Why Us Section */}
        <section
          style={{
            background: "#f0f2f5",
            padding: "100px 0",
          }}
        >
          <div className="max-w-screen-xl mx-auto px-6">
            <div style={{ textAlign: "center", marginBottom: "64px" }}>
              <div
                style={{
                  display: "flex",
                  alignItems: "center",
                  gap: "10px",
                  marginBottom: "16px",
                  justifyContent: "center",
                }}
              >
                <div style={{ width: "36px", height: "3px", background: "#fcdb00" }} />
                <span
                  style={{
                    color: "#033869",
                    fontSize: "0.78rem",
                    fontWeight: 700,
                    letterSpacing: "0.16em",
                    textTransform: "uppercase",
                  }}
                >
                  Proč zvolit nás
                </span>
              </div>
              <h2
                style={{
                  fontFamily: "'Barlow Condensed', sans-serif",
                  fontSize: "clamp(2rem, 3.5vw, 3rem)",
                  fontWeight: 800,
                  color: "#033869",
                  textTransform: "uppercase",
                  lineHeight: 1.1,
                }}
              >
                8 důvodů, proč vybrat
                <br />
                <span style={{ color: "#42454e" }}>Potápěčskou stanici a.s.</span>
              </h2>
            </div>

            {/* Reasons grid */}
            <div
              style={{
                display: "grid",
                gridTemplateColumns: "repeat(4, 1fr)",
                gap: "24px",
              }}
              className="lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-1"
            >
              {reasons.map((reason, i) => (
                <div
                  key={i}
                  style={{
                    background: "#ffffff",
                    border: "1px solid rgba(3,56,105,0.08)",
                    borderRadius: "4px",
                    padding: "32px 24px",
                    transition: "all 0.25s",
                  }}
                  onMouseEnter={(e) => {
                    const el = e.currentTarget as HTMLElement;
                    el.style.boxShadow = "0 12px 32px rgba(3,56,105,0.1)";
                    el.style.borderColor = "rgba(3,56,105,0.15)";
                    el.style.transform = "translateY(-4px)";
                  }}
                  onMouseLeave={(e) => {
                    const el = e.currentTarget as HTMLElement;
                    el.style.boxShadow = "none";
                    el.style.borderColor = "rgba(3,56,105,0.08)";
                    el.style.transform = "translateY(0)";
                  }}
                >
                  <div
                    style={{
                      width: "48px",
                      height: "48px",
                      background: "#fcdb00",
                      borderRadius: "50%",
                      display: "flex",
                      alignItems: "center",
                      justifyContent: "center",
                      marginBottom: "20px",
                    }}
                  >
                    <span
                      style={{
                        fontFamily: "'Barlow Condensed', sans-serif",
                        fontSize: "1.4rem",
                        fontWeight: 800,
                        color: "#033869",
                      }}
                    >
                      {i + 1}
                    </span>
                  </div>
                  <h3
                    style={{
                      fontFamily: "'Barlow Condensed', sans-serif",
                      fontSize: "1.1rem",
                      fontWeight: 800,
                      color: "#033869",
                      textTransform: "uppercase",
                      letterSpacing: "0.02em",
                      marginBottom: "12px",
                      lineHeight: 1.2,
                    }}
                  >
                    {reason.title}
                  </h3>
                  <p style={{ color: "#6b7280", fontSize: "0.88rem", lineHeight: 1.6 }}>
                    {reason.desc}
                  </p>
                </div>
              ))}
            </div>
          </div>
        </section>

        {/* 4. About Us Section */}
        <section
          style={{
            background: "#033869",
            padding: "100px 0",
          }}
        >
          <div className="max-w-screen-xl mx-auto px-6">
            <div style={{ maxWidth: "900px", margin: "0 auto", textAlign: "center" }}>
              <div
                style={{
                  display: "flex",
                  alignItems: "center",
                  gap: "10px",
                  marginBottom: "16px",
                  justifyContent: "center",
                }}
              >
                <div style={{ width: "36px", height: "3px", background: "#fcdb00" }} />
                <span
                  style={{
                    color: "#fcdb00",
                    fontSize: "0.78rem",
                    fontWeight: 700,
                    letterSpacing: "0.16em",
                    textTransform: "uppercase",
                  }}
                >
                  O nás
                </span>
              </div>
              <h2
                style={{
                  fontFamily: "'Barlow Condensed', sans-serif",
                  fontSize: "clamp(2rem, 3.5vw, 3rem)",
                  fontWeight: 800,
                  color: "#ffffff",
                  textTransform: "uppercase",
                  lineHeight: 1.1,
                  marginBottom: "28px",
                }}
              >
                30 let pod vodou.
                <br />
                <span style={{ color: "#fcdb00" }}>Tisíce úspěšných projektů.</span>
              </h2>
              <p
                style={{
                  color: "rgba(226,232,240,0.85)",
                  fontSize: "1.1rem",
                  lineHeight: 1.8,
                  marginBottom: "20px",
                }}
              >
                Potápěčská stanice a.s. není jen dodavatel – jsme partner, který rozumí extrémním 
                podmínkám a ví, jak v nich dodat výsledky. Od roku 1994 realizujeme projekty, které 
                vyžadují maximální technickou zdatnost a absolutní spolehlivost.
              </p>
              <p
                style={{
                  color: "rgba(226,232,240,0.75)",
                  fontSize: "1rem",
                  lineHeight: 1.8,
                }}
              >
                Naše výbava není najatá – je naše. Náš tým nejsou brigádníci – jsou to profesionálové 
                s osvědčením. A naše reference? To jsou projekty jako Karlův most, Orlík nebo Metro Praha. 
                Projekty, které jiní odmítli.
              </p>
            </div>
          </div>
        </section>

        {/* 5. Projects Slider Section */}
        <section
          style={{
            background: "#f0f2f5",
            padding: "100px 0",
          }}
        >
          <div className="max-w-screen-xl mx-auto px-6">
            <div style={{ marginBottom: "64px" }}>
              <div style={{ display: "flex", alignItems: "center", gap: "10px", marginBottom: "16px" }}>
                <div style={{ width: "36px", height: "3px", background: "#fcdb00" }} />
                <span
                  style={{
                    color: "#033869",
                    fontSize: "0.78rem",
                    fontWeight: 700,
                    letterSpacing: "0.16em",
                    textTransform: "uppercase",
                  }}
                >
                  Realizované projekty
                </span>
              </div>
              <h2
                style={{
                  fontFamily: "'Barlow Condensed', sans-serif",
                  fontSize: "clamp(2rem, 3.5vw, 3rem)",
                  fontWeight: 800,
                  color: "#033869",
                  textTransform: "uppercase",
                  lineHeight: 1.1,
                }}
              >
                Stavební projekty,
                <br />
                <span style={{ color: "#42454e" }}>které definují naši práci</span>
              </h2>
            </div>

            {/* Projects grid */}
            <div
              style={{
                display: "grid",
                gridTemplateColumns: "1fr 1fr 1fr",
                gap: "20px",
              }}
              className="lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1"
            >
              {projects.map((project, i) => (
                <a
                  key={i}
                  href="#kontakt"
                  onClick={(e) => {
                    e.preventDefault();
                    document.querySelector("#kontakt")?.scrollIntoView({ behavior: "smooth" });
                  }}
                  style={{
                    background: "#ffffff",
                    border: "1px solid rgba(3,56,105,0.08)",
                    borderRadius: "4px",
                    overflow: "hidden",
                    transition: "all 0.25s",
                    cursor: "pointer",
                    display: "block",
                    textDecoration: "none",
                    position: "relative",
                  }}
                  onMouseEnter={(e) => {
                    const el = e.currentTarget as HTMLElement;
                    el.style.boxShadow = "0 16px 40px rgba(3,56,105,0.12)";
                    el.style.borderColor = "rgba(3,56,105,0.2)";
                  }}
                  onMouseLeave={(e) => {
                    const el = e.currentTarget as HTMLElement;
                    el.style.boxShadow = "none";
                    el.style.borderColor = "rgba(3,56,105,0.08)";
                  }}
                >
                  <div
                    style={{
                      height: "200px",
                      overflow: "hidden",
                      position: "relative",
                    }}
                  >
                    <img
                      src={EXCAVATOR_IMG}
                      alt={project.title}
                      style={{
                        width: "100%",
                        height: "100%",
                        objectFit: "cover",
                        objectPosition: "center",
                        display: "block",
                      }}
                    />
                    <div
                      style={{
                        position: "absolute",
                        inset: 0,
                        background: "linear-gradient(to top, rgba(3,56,105,0.55) 0%, transparent 70%)",
                      }}
                    />
                    <div
                      style={{
                        position: "absolute",
                        top: "16px",
                        left: "16px",
                        background: "#fcdb00",
                        color: "#033869",
                        fontSize: "0.65rem",
                        fontWeight: 800,
                        letterSpacing: "0.1em",
                        textTransform: "uppercase",
                        padding: "6px 12px",
                        borderRadius: "2px",
                      }}
                    >
                      {project.category}
                    </div>
                  </div>

                  <div style={{ padding: "28px 24px" }}>
                    <h3
                      style={{
                        fontFamily: "'Barlow Condensed', sans-serif",
                        fontSize: "1.2rem",
                        fontWeight: 800,
                        color: "#033869",
                        textTransform: "uppercase",
                        letterSpacing: "0.02em",
                        marginBottom: "12px",
                        lineHeight: 1.2,
                      }}
                    >
                      {project.title}
                    </h3>

                    <div
                      style={{
                        display: "flex",
                        alignItems: "center",
                        gap: "16px",
                        marginBottom: "14px",
                      }}
                    >
                      <div
                        style={{
                          display: "flex",
                          alignItems: "center",
                          gap: "5px",
                          color: "#9ca3af",
                          fontSize: "0.82rem",
                        }}
                      >
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2">
                          <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" />
                          <circle cx="12" cy="10" r="3" />
                        </svg>
                        {project.location}
                      </div>
                      <div
                        style={{
                          display: "flex",
                          alignItems: "center",
                          gap: "5px",
                          color: "#9ca3af",
                          fontSize: "0.82rem",
                        }}
                      >
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2">
                          <rect x="3" y="4" width="18" height="18" rx="2" ry="2" />
                          <line x1="16" y1="2" x2="16" y2="6" />
                          <line x1="8" y1="2" x2="8" y2="6" />
                          <line x1="3" y1="10" x2="21" y2="10" />
                        </svg>
                        {project.date}
                      </div>
                    </div>

                    <p style={{ color: "#6b7280", fontSize: "0.88rem", lineHeight: 1.6, marginBottom: "18px" }}>
                      {project.desc}
                    </p>

                    <div
                      style={{
                        display: "flex",
                        alignItems: "center",
                        gap: "6px",
                        color: "#033869",
                        fontSize: "0.75rem",
                        fontWeight: 700,
                        letterSpacing: "0.06em",
                        textTransform: "uppercase",
                      }}
                    >
                      Zjistit více o projektu
                      <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2.5">
                        <path d="M5 12h14M12 5l7 7-7 7" />
                      </svg>
                    </div>
                  </div>

                  <div
                    style={{
                      position: "absolute",
                      bottom: 0,
                      left: 0,
                      height: "3px",
                      width: "48px",
                      background: "#fcdb00",
                    }}
                  />
                </a>
              ))}
            </div>
          </div>
        </section>

        {/* 6. Contact Section */}
        <section
          id="kontakt"
          style={{
            background: "#022d5e",
            padding: "80px 0",
            position: "relative",
          }}
        >
          <div className="max-w-screen-xl mx-auto px-6">
            {/* Section header */}
            <div style={{ marginBottom: "48px" }}>
              <div style={{ display: "flex", alignItems: "center", gap: "10px", marginBottom: "12px" }}>
                <div style={{ width: "36px", height: "3px", background: "#fcdb00" }} />
                <span
                  style={{
                    color: "#fcdb00",
                    fontSize: "0.78rem",
                    fontWeight: 700,
                    letterSpacing: "0.16em",
                    textTransform: "uppercase",
                  }}
                >
                  Kontakt
                </span>
              </div>
              <h2
                style={{
                  fontFamily: "'Barlow Condensed', sans-serif",
                  fontSize: "clamp(2rem, 3vw, 2.6rem)",
                  fontWeight: 800,
                  color: "#ffffff",
                  textTransform: "uppercase",
                  lineHeight: 1.1,
                }}
              >
                Napište nám nebo zavolejte
              </h2>
            </div>

            {/* Two columns */}
            <div
              style={{
                display: "grid",
                gridTemplateColumns: "1fr 1fr",
                gap: "64px",
                alignItems: "start",
              }}
              className="lg:grid-cols-2 grid-cols-1"
            >
              {/* Left: contact info */}
              <div>
                <div style={{ marginBottom: "32px" }}>
                  <div
                    style={{
                      color: "rgba(226,232,240,0.45)",
                      fontSize: "0.68rem",
                      fontWeight: 700,
                      letterSpacing: "0.12em",
                      textTransform: "uppercase",
                      marginBottom: "8px",
                    }}
                  >
                    E-mail
                  </div>
                  <a
                    href="mailto:info@potapecska-stanice.cz"
                    style={{
                      color: "#fcdb00",
                      fontSize: "1.4rem",
                      fontWeight: 700,
                      textDecoration: "none",
                      display: "block",
                    }}
                  >
                    info@potapecska-stanice.cz
                  </a>
                </div>

                <div style={{ marginBottom: "32px" }}>
                  <div
                    style={{
                      color: "rgba(226,232,240,0.45)",
                      fontSize: "0.68rem",
                      fontWeight: 700,
                      letterSpacing: "0.12em",
                      textTransform: "uppercase",
                      marginBottom: "8px",
                    }}
                  >
                    Telefon
                  </div>
                  <a
                    href="tel:+420312681158"
                    style={{
                      color: "#fcdb00",
                      fontSize: "1.4rem",
                      fontWeight: 700,
                      textDecoration: "none",
                      display: "block",
                    }}
                  >
                    +420 312 681 158
                  </a>
                </div>

                {/* Contact person image */}
                <div
                  style={{
                    borderRadius: "4px",
                    overflow: "hidden",
                    border: "2px solid rgba(252,219,0,0.3)",
                  }}
                >
                  <img
                    src={EXCAVATOR_IMG}
                    alt="Kontaktní osoba"
                    style={{
                      width: "100%",
                      height: "auto",
                      display: "block",
                    }}
                  />
                </div>
              </div>

              {/* Right: simple form */}
              <SimpleContactForm />
            </div>
          </div>
        </section>

        {/* 7. Key Partners Section */}
        <section
          style={{
            background: "#f0f2f5",
            padding: "100px 0",
          }}
        >
          <div className="max-w-screen-xl mx-auto px-6">
            <div
              style={{
                background: "#033869",
                borderRadius: "4px",
                padding: "48px 52px",
              }}
            >
              <p
                style={{
                  color: "rgba(226,232,240,0.6)",
                  fontSize: "0.75rem",
                  fontWeight: 700,
                  letterSpacing: "0.16em",
                  textTransform: "uppercase",
                  textAlign: "center",
                  marginBottom: "32px",
                }}
              >
                Klíčoví partneři a zadavatelé
              </p>
              <div
                style={{
                  display: "flex",
                  flexWrap: "wrap",
                  justifyContent: "center",
                  gap: "12px",
                }}
              >
                {clients.map((client, i) => (
                  <div
                    key={i}
                    style={{
                      background: "rgba(255,255,255,0.07)",
                      border: "1px solid rgba(255,255,255,0.12)",
                      borderRadius: "3px",
                      padding: "12px 22px",
                      transition: "all 0.2s",
                      cursor: "default",
                    }}
                    onMouseEnter={(e) => {
                      (e.currentTarget as HTMLElement).style.background = "rgba(252,219,0,0.1)";
                      (e.currentTarget as HTMLElement).style.borderColor = "rgba(252,219,0,0.3)";
                    }}
                    onMouseLeave={(e) => {
                      (e.currentTarget as HTMLElement).style.background = "rgba(255,255,255,0.07)";
                      (e.currentTarget as HTMLElement).style.borderColor = "rgba(255,255,255,0.12)";
                    }}
                  >
                    <span
                      style={{
                        fontFamily: "'Barlow Condensed', sans-serif",
                        fontSize: "0.95rem",
                        fontWeight: 700,
                        color: "#ffffff",
                        letterSpacing: "0.04em",
                        textTransform: "uppercase",
                        whiteSpace: "nowrap",
                      }}
                    >
                      {client}
                    </span>
                  </div>
                ))}
              </div>
            </div>
          </div>
        </section>

        {/* 8. Related Services Section */}
        <section
          style={{
            background: "#ffffff",
            padding: "100px 0",
          }}
        >
          <div className="max-w-screen-xl mx-auto px-6">
            <div style={{ textAlign: "center", marginBottom: "64px" }}>
              <div
                style={{
                  display: "flex",
                  alignItems: "center",
                  gap: "10px",
                  marginBottom: "16px",
                  justifyContent: "center",
                }}
              >
                <div style={{ width: "36px", height: "3px", background: "#fcdb00" }} />
                <span
                  style={{
                    color: "#033869",
                    fontSize: "0.78rem",
                    fontWeight: 700,
                    letterSpacing: "0.16em",
                    textTransform: "uppercase",
                  }}
                >
                  Také nabízíme
                </span>
              </div>
              <h2
                style={{
                  fontFamily: "'Barlow Condensed', sans-serif",
                  fontSize: "clamp(2rem, 3.5vw, 3rem)",
                  fontWeight: 800,
                  color: "#033869",
                  textTransform: "uppercase",
                  lineHeight: 1.1,
                }}
              >
                Další potápěčské služby
                <br />
                <span style={{ color: "#42454e" }}>pro vaše projekty</span>
              </h2>
            </div>

            {/* Services grid */}
            <div
              style={{
                display: "grid",
                gridTemplateColumns: "repeat(4, 1fr)",
                gap: "20px",
                marginBottom: "48px",
              }}
              className="lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-1"
            >
              {[
                {
                  title: "Strojní potápěčské práce",
                  desc: "Montáže a demontáže technologií, výměny míchadel a čerpadel, opravy hrazení stavidel a šoupátek v ponořeném stavu.",
                  tags: ["Montáže", "Míchadla", "Hrazení"],
                },
                {
                  title: "Podzemní potápěčské práce",
                  desc: "Práce v šachtách, tunelech, trasách metra a kanalizačních systémech bez volné hladiny. Sifony a průplavy.",
                  tags: ["Šachty", "Tunely", "Metro"],
                },
                {
                  title: "Speciální potápěčské práce",
                  desc: "Podvodní svařování a řezání, pálení ocelových konstrukcí, trhací práce a demolice pod hladinou.",
                  tags: ["Svařování", "Řezání", "Demolice"],
                },
                {
                  title: "Video & Fotodokumentace",
                  desc: "Průmyslová revize stavebního stavu vodních děl. ROV průzkum, podvodní kamera, technické zprávy pro správce.",
                  tags: ["ROV průzkum", "Videozáznam", "Technické zprávy"],
                },
              ].map((service, i) => (
                <div
                  key={i}
                  style={{
                    background: "#ffffff",
                    border: "1px solid rgba(3,56,105,0.08)",
                    borderRadius: "4px",
                    padding: "32px 24px",
                    transition: "all 0.25s",
                    position: "relative",
                  }}
                  onMouseEnter={(e) => {
                    const el = e.currentTarget as HTMLElement;
                    el.style.boxShadow = "0 12px 32px rgba(3,56,105,0.1)";
                    el.style.borderColor = "rgba(3,56,105,0.15)";
                    el.style.transform = "translateY(-4px)";
                  }}
                  onMouseLeave={(e) => {
                    const el = e.currentTarget as HTMLElement;
                    el.style.boxShadow = "none";
                    el.style.borderColor = "rgba(3,56,105,0.08)";
                    el.style.transform = "translateY(0)";
                  }}
                >
                  <h3
                    style={{
                      fontFamily: "'Barlow Condensed', sans-serif",
                      fontSize: "1.15rem",
                      fontWeight: 800,
                      color: "#033869",
                      textTransform: "uppercase",
                      letterSpacing: "0.02em",
                      marginBottom: "14px",
                      lineHeight: 1.2,
                    }}
                  >
                    {service.title}
                  </h3>
                  <p style={{ color: "#6b7280", fontSize: "0.88rem", lineHeight: 1.6, marginBottom: "20px" }}>
                    {service.desc}
                  </p>

                  <div style={{ display: "flex", flexWrap: "wrap", gap: "6px" }}>
                    {service.tags.map((tag, j) => (
                      <span
                        key={j}
                        style={{
                          background: "rgba(3,56,105,0.06)",
                          color: "#033869",
                          fontSize: "0.7rem",
                          fontWeight: 700,
                          letterSpacing: "0.05em",
                          textTransform: "uppercase",
                          padding: "5px 10px",
                          borderRadius: "2px",
                        }}
                      >
                        {tag}
                      </span>
                    ))}
                  </div>

                  <div
                    style={{
                      position: "absolute",
                      bottom: 0,
                      left: 0,
                      height: "3px",
                      width: "48px",
                      background: "#fcdb00",
                    }}
                  />
                </div>
              ))}
            </div>

            {/* All Services Button */}
            <div style={{ textAlign: "center" }}>
              <a
                href="/#sluzby"
                style={{
                  display: "inline-flex",
                  alignItems: "center",
                  gap: "10px",
                  background: "#033869",
                  color: "#ffffff",
                  fontFamily: "'Barlow', sans-serif",
                  fontSize: "0.9rem",
                  fontWeight: 700,
                  letterSpacing: "0.1em",
                  textTransform: "uppercase",
                  textDecoration: "none",
                  padding: "16px 36px",
                  borderRadius: "3px",
                  transition: "all 0.2s",
                }}
                onMouseEnter={(e) => {
                  (e.currentTarget as HTMLElement).style.background = "#fcdb00";
                  (e.currentTarget as HTMLElement).style.color = "#033869";
                }}
                onMouseLeave={(e) => {
                  (e.currentTarget as HTMLElement).style.background = "#033869";
                  (e.currentTarget as HTMLElement).style.color = "#ffffff";
                }}
              >
                Zobrazit všechny služby
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2.5">
                  <path d="M5 12h14M12 5l7 7-7 7" />
                </svg>
              </a>
            </div>
          </div>
        </section>
      </main>

      <Footer />
    </div>
  );
}