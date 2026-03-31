import { Header } from "../components/Header";
import { Footer } from "../components/Footer";
import teamImg from "figma:asset/f253eada3b3fea1fce8818279ea73f3a35c7fc62.png";
import iso14001 from "figma:asset/dd408c73915d423b971ab2c61f9698dfe19dfdbd.png";
import iso45001 from "figma:asset/5ea6e05c4c553154dd115504e7d96a2cac66605a.png";
import iso9001 from "figma:asset/e72f67da35b04e9bfc933ae8962db0791b841a0a.png";

const certImages = [
  { img: iso9001, label: "ISO 9001", desc: "Systém managementu kvality" },
  { img: iso14001, label: "ISO 14001", desc: "Environmentální management" },
  { img: iso45001, label: "ISO 45001", desc: "Bezpečnost a ochrana zdraví" },
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

export function AboutPage() {
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
        {/* Hero Section with Background Image */}
        <section
          style={{
            position: "relative",
            padding: "160px 0 100px",
            overflow: "hidden",
            minHeight: "600px",
          }}
        >
          {/* Background Image */}
          <div
            style={{
              position: "absolute",
              inset: 0,
              backgroundImage: `url('https://images.unsplash.com/photo-1694151425826-db0e185368dd?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxwcm9mZXNzaW9uYWwlMjBkaXZpbmclMjB0ZWFtJTIwZ3JvdXB8ZW58MXx8fHwxNzc0NjA0Mzk5fDA&ixlib=rb-4.1.0&q=80&w=1080')`,
              backgroundSize: "cover",
              backgroundPosition: "center",
              zIndex: 0,
            }}
          />
          {/* Dark Overlay */}
          <div
            style={{
              position: "absolute",
              inset: 0,
              background: "linear-gradient(135deg, rgba(3,56,105,0.92) 0%, rgba(2,45,94,0.88) 100%)",
              zIndex: 1,
            }}
          />

          {/* Content */}
          <div className="max-w-screen-xl mx-auto px-6" style={{ position: "relative", zIndex: 2 }}>
            <div style={{ maxWidth: "700px" }}>
              <div
                style={{
                  display: "inline-flex",
                  alignItems: "center",
                  gap: "10px",
                  marginBottom: "20px",
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
                  Potápěčská Stanice a.s.
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
                30 let expertízy v profesionálním potápění
              </h1>
              <p
                style={{
                  color: "rgba(226,232,240,0.9)",
                  fontSize: "1.15rem",
                  lineHeight: 1.7,
                  marginBottom: "32px",
                }}
              >
                Jsme nejspolehlivější potápěčskou společností v České republice. Od roku 1990 poskytujeme komplexní
                služby pro vodohospodářství, průmysl a stavebnictví.
              </p>

              {/* Quick Stats */}
              <div
                style={{
                  display: "grid",
                  gridTemplateColumns: "repeat(3, 1fr)",
                  gap: "24px",
                  marginTop: "40px",
                }}
              >
                {[
                  { number: "30+", label: "let na trhu" },
                  { number: "3000+", label: "hodin pod vodou/rok" },
                  { number: "500+", label: "úspěšných projektů" },
                ].map((stat, i) => (
                  <div key={i}>
                    <div
                      style={{
                        fontFamily: "'Barlow Condensed', sans-serif",
                        fontSize: "2.5rem",
                        fontWeight: 900,
                        color: "#fcdb00",
                        lineHeight: 1,
                        marginBottom: "8px",
                      }}
                    >
                      {stat.number}
                    </div>
                    <div
                      style={{
                        color: "rgba(226,232,240,0.8)",
                        fontSize: "0.85rem",
                        fontWeight: 600,
                        letterSpacing: "0.04em",
                        textTransform: "uppercase",
                      }}
                    >
                      {stat.label}
                    </div>
                  </div>
                ))}
              </div>
            </div>
          </div>
        </section>

        {/* O nás Section (from homepage) */}
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
                gap: "80px",
                alignItems: "center",
              }}
              className="lg:grid-cols-2 grid-cols-1"
            >
              {/* Left: text */}
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
                    O nás
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
                  30 let expertízy
                </h2>

                <p style={{ color: "#6b7280", fontSize: "1rem", lineHeight: 1.8, marginBottom: "20px" }}>
                  Potápěčská stanice, a.s. byla founded počátkem roku 1990 a navázala na
                  předrevoluční tradici profesionálních potápěčských pracovišť při Povodí Ohře
                  a Povodí Vltava. Více než 30 let budujeme pozici nejspolehlivější potápěčské
                  společnosti v České republice.
                </p>
                <p style={{ color: "#6b7280", fontSize: "1rem", lineHeight: 1.8, marginBottom: "36px" }}>
                  Disponujeme kompletním vybavením včetně mobilních dekompresních komor,
                  digitálních videosystémů a přilbových kamer s přímým přenosem obrazu na
                  hladinu. Ročně odpracujeme přes 3 000 hodin pod vodou.
                </p>

                <a
                  href="#kontakt"
                  onClick={(e) => {
                    e.preventDefault();
                    window.scrollTo({ top: document.body.scrollHeight, behavior: "smooth" });
                  }}
                  style={{
                    display: "inline-flex",
                    alignItems: "center",
                    gap: "10px",
                    background: "#033869",
                    color: "#ffffff",
                    fontSize: "0.85rem",
                    fontWeight: 700,
                    letterSpacing: "0.1em",
                    textTransform: "uppercase",
                    textDecoration: "none",
                    padding: "14px 32px",
                    borderRadius: "3px",
                    transition: "all 0.2s",
                  }}
                  onMouseEnter={(e) => {
                    (e.currentTarget as HTMLElement).style.background = "#022d5e";
                    (e.currentTarget as HTMLElement).style.boxShadow = "0 8px 24px rgba(3,56,105,0.3)";
                  }}
                  onMouseLeave={(e) => {
                    (e.currentTarget as HTMLElement).style.background = "#033869";
                    (e.currentTarget as HTMLElement).style.boxShadow = "none";
                  }}
                >
                  Kontaktujte nás
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2.5">
                    <path d="M5 12h14M12 5l7 7-7 7" />
                  </svg>
                </a>
              </div>

              {/* Right: image + certs */}
              <div>
                {/* Image */}
                <div
                  style={{
                    position: "relative",
                    borderRadius: "4px",
                    overflow: "hidden",
                    marginBottom: "24px",
                    height: "300px",
                  }}
                >
                  <img
                    src={teamImg}
                    alt="Potápěčská Stanice – tým v akci"
                    style={{ width: "100%", height: "100%", objectFit: "cover", objectPosition: "center 50%" }}
                  />
                  <div
                    style={{
                      position: "absolute",
                      inset: 0,
                      background: "linear-gradient(to top, rgba(3,56,105,0.7) 0%, transparent 60%)",
                    }}
                  />
                  {/* Years badge */}
                  <div
                    style={{
                      position: "absolute",
                      bottom: "20px",
                      left: "20px",
                      display: "flex",
                      alignItems: "flex-end",
                      gap: "8px",
                    }}
                  >
                    <span
                      style={{
                        fontFamily: "'Barlow Condensed', sans-serif",
                        fontSize: "3.5rem",
                        fontWeight: 900,
                        color: "#fcdb00",
                        lineHeight: 1,
                      }}
                    >
                      30+
                    </span>
                    <span
                      style={{
                        color: "#ffffff",
                        fontSize: "0.85rem",
                        fontWeight: 500,
                        paddingBottom: "8px",
                        letterSpacing: "0.04em",
                      }}
                    >
                      let praxe
                    </span>
                  </div>
                </div>

                {/* Cert badges */}
                <div
                  style={{
                    display: "flex",
                    alignItems: "center",
                    gap: "16px",
                    padding: "16px 20px",
                    background: "#f8f9fb",
                    border: "1px solid rgba(3,56,105,0.08)",
                    borderRadius: "4px",
                  }}
                >
                  <span
                    style={{
                      color: "#9ca3af",
                      fontSize: "0.68rem",
                      fontWeight: 700,
                      letterSpacing: "0.1em",
                      textTransform: "uppercase",
                      whiteSpace: "nowrap",
                      flexShrink: 0,
                    }}
                  >
                    Certifikace:
                  </span>
                  <div style={{ display: "flex", alignItems: "center", gap: "12px" }}>
                    {certImages.map((c) => (
                      <div
                        key={c.label}
                        style={{
                          display: "flex",
                          flexDirection: "column",
                          alignItems: "center",
                          gap: "4px",
                        }}
                        title={`${c.label} – ${c.desc}`}
                      >
                        <img
                          src={c.img}
                          alt={c.label}
                          style={{
                            height: "60px",
                            width: "60px",
                            objectFit: "contain",
                            opacity: 0.85,
                          }}
                        />
                        <span
                          style={{
                            fontSize: "0.65rem",
                            fontWeight: 700,
                            color: "#6b7280",
                            letterSpacing: "0.04em",
                            textTransform: "uppercase",
                          }}
                        >
                          {c.label}
                        </span>
                      </div>
                    ))}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        {/* Střediska Section */}
        <section
          style={{
            background: "#f0f2f5",
            padding: "100px 0",
          }}
        >
          <div className="max-w-screen-xl mx-auto px-6">
            <div style={{ marginBottom: "64px", textAlign: "center" }}>
              <div
                style={{
                  display: "inline-flex",
                  alignItems: "center",
                  gap: "10px",
                  marginBottom: "16px",
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
                  Naše střediska
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
                Dvě strategická střediska v ČR
              </h2>
            </div>

            <div
              style={{
                display: "grid",
                gridTemplateColumns: "1fr 1fr",
                gap: "32px",
                marginBottom: "32px",
              }}
              className="lg:grid-cols-2 md:grid-cols-1"
            >
              {/* Středisko Západ */}
              <div
                style={{
                  background: "#ffffff",
                  borderRadius: "4px",
                  padding: "40px 32px",
                  border: "2px solid #fcdb00",
                  boxShadow: "0 8px 32px rgba(3,56,105,0.08)",
                }}
              >
                <div
                  style={{
                    display: "inline-flex",
                    alignItems: "center",
                    justifyContent: "center",
                    width: "56px",
                    height: "56px",
                    background: "rgba(252,219,0,0.15)",
                    borderRadius: "50%",
                    marginBottom: "20px",
                  }}
                >
                  <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#fcdb00" strokeWidth="2">
                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" />
                    <circle cx="12" cy="10" r="3" />
                  </svg>
                </div>
                <h3
                  style={{
                    fontFamily: "'Barlow Condensed', sans-serif",
                    fontSize: "1.6rem",
                    fontWeight: 800,
                    color: "#033869",
                    textTransform: "uppercase",
                    letterSpacing: "0.02em",
                    marginBottom: "20px",
                  }}
                >
                  Středisko Západ
                </h3>
                <div style={{ display: "flex", flexDirection: "column", gap: "16px" }}>
                  <div>
                    <div
                      style={{
                        color: "#9ca3af",
                        fontSize: "0.7rem",
                        fontWeight: 700,
                        letterSpacing: "0.1em",
                        textTransform: "uppercase",
                        marginBottom: "6px",
                      }}
                    >
                      Areál
                    </div>
                    <div style={{ color: "#42454e", fontSize: "0.95rem", lineHeight: 1.5 }}>
                      Povodí Ohře
                    </div>
                  </div>
                  <div>
                    <div
                      style={{
                        color: "#9ca3af",
                        fontSize: "0.7rem",
                        fontWeight: 700,
                        letterSpacing: "0.1em",
                        textTransform: "uppercase",
                        marginBottom: "6px",
                      }}
                    >
                      Adresa
                    </div>
                    <div style={{ color: "#42454e", fontSize: "0.95rem", lineHeight: 1.5 }}>
                      Bezručova 4219<br />
                      430 03 Chomutov
                    </div>
                  </div>
                  <div>
                    <div
                      style={{
                        color: "#9ca3af",
                        fontSize: "0.7rem",
                        fontWeight: 700,
                        letterSpacing: "0.1em",
                        textTransform: "uppercase",
                        marginBottom: "6px",
                      }}
                    >
                      Telefon
                    </div>
                    <a
                      href="tel:+420722459243"
                      style={{
                        color: "#033869",
                        fontSize: "0.95rem",
                        fontWeight: 700,
                        textDecoration: "none",
                        display: "flex",
                        alignItems: "center",
                        gap: "6px",
                      }}
                    >
                      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2.5">
                        <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 01.12 1.18 2 2 0 012.11 0h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z" />
                      </svg>
                      +420 722 459 243
                    </a>
                  </div>
                </div>
              </div>

              {/* Sídlo společnosti */}
              <div
                style={{
                  background: "#ffffff",
                  borderRadius: "4px",
                  padding: "40px 32px",
                  border: "1px solid rgba(3,56,105,0.1)",
                  boxShadow: "0 4px 16px rgba(3,56,105,0.06)",
                }}
              >
                <div
                  style={{
                    display: "inline-flex",
                    alignItems: "center",
                    justifyContent: "center",
                    width: "56px",
                    height: "56px",
                    background: "rgba(3,56,105,0.08)",
                    borderRadius: "50%",
                    marginBottom: "20px",
                  }}
                >
                  <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#033869" strokeWidth="2">
                    <rect x="3" y="3" width="18" height="18" rx="2" />
                    <path d="M3 9h18M9 21V9" />
                  </svg>
                </div>
                <h3
                  style={{
                    fontFamily: "'Barlow Condensed', sans-serif",
                    fontSize: "1.6rem",
                    fontWeight: 800,
                    color: "#033869",
                    textTransform: "uppercase",
                    letterSpacing: "0.02em",
                    marginBottom: "20px",
                  }}
                >
                  Sídlo společnosti
                </h3>
                <div style={{ display: "flex", flexDirection: "column", gap: "16px" }}>
                  <div>
                    <div
                      style={{
                        color: "#9ca3af",
                        fontSize: "0.7rem",
                        fontWeight: 700,
                        letterSpacing: "0.1em",
                        textTransform: "uppercase",
                        marginBottom: "6px",
                      }}
                    >
                      Název
                    </div>
                    <div style={{ color: "#42454e", fontSize: "0.95rem", lineHeight: 1.5 }}>
                      Potápěčská stanice a.s.
                    </div>
                  </div>
                  <div>
                    <div
                      style={{
                        color: "#9ca3af",
                        fontSize: "0.7rem",
                        fontWeight: 700,
                        letterSpacing: "0.1em",
                        textTransform: "uppercase",
                        marginBottom: "6px",
                      }}
                    >
                      Adresa
                    </div>
                    <div style={{ color: "#42454e", fontSize: "0.95rem", lineHeight: 1.5 }}>
                      Botičská 1936/4<br />
                      128 00 Praha 2
                    </div>
                  </div>
                  <div>
                    <div
                      style={{
                        color: "#9ca3af",
                        fontSize: "0.7rem",
                        fontWeight: 700,
                        letterSpacing: "0.1em",
                        textTransform: "uppercase",
                        marginBottom: "6px",
                      }}
                    >
                      Identifikace
                    </div>
                    <div style={{ color: "#42454e", fontSize: "0.95rem", lineHeight: 1.5 }}>
                      IČ: 47285532<br />
                      DIČ: CZ47285532
                    </div>
                  </div>
                </div>
              </div>
            </div>

            {/* Korespondenční adresa - pod tím */}
            <div
              style={{
                background: "#ffffff",
                borderRadius: "4px",
                padding: "40px 32px",
                border: "1px solid rgba(3,56,105,0.1)",
                boxShadow: "0 4px 16px rgba(3,56,105,0.06)",
              }}
            >
              <div style={{ display: "flex", alignItems: "flex-start", gap: "32px" }}>
                <div
                  style={{
                    display: "inline-flex",
                    alignItems: "center",
                    justifyContent: "center",
                    width: "56px",
                    height: "56px",
                    background: "rgba(3,56,105,0.08)",
                    borderRadius: "50%",
                    flexShrink: 0,
                  }}
                >
                  <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#033869" strokeWidth="2">
                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                    <polyline points="22,6 12,13 2,6" />
                  </svg>
                </div>
                <div style={{ flex: 1 }}>
                  <h3
                    style={{
                      fontFamily: "'Barlow Condensed', sans-serif",
                      fontSize: "1.6rem",
                      fontWeight: 800,
                      color: "#033869",
                      textTransform: "uppercase",
                      letterSpacing: "0.02em",
                      marginBottom: "20px",
                    }}
                  >
                    Korespondenční adresa
                  </h3>
                  <div style={{ display: "flex", gap: "48px", flexWrap: "wrap" }}>
                    <div>
                      <div
                        style={{
                          color: "#9ca3af",
                          fontSize: "0.7rem",
                          fontWeight: 700,
                          letterSpacing: "0.1em",
                          textTransform: "uppercase",
                          marginBottom: "6px",
                        }}
                      >
                        Adresa pro poštu
                      </div>
                      <div style={{ color: "#42454e", fontSize: "0.95rem", lineHeight: 1.5 }}>
                        Bezručova 4219<br />
                        430 03 Chomutov
                      </div>
                    </div>
                    <div>
                      <div
                        style={{
                          color: "#9ca3af",
                          fontSize: "0.7rem",
                          fontWeight: 700,
                          letterSpacing: "0.1em",
                          textTransform: "uppercase",
                          marginBottom: "6px",
                        }}
                      >
                        Poznámka
                      </div>
                      <div style={{ color: "#6b7280", fontSize: "0.9rem", lineHeight: 1.5, fontStyle: "italic" }}>
                        Pro veškerou korespondenční poštu používejte tuto adresu
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        {/* Partners Section */}
        <section
          style={{
            background: "#ffffff",
            padding: "100px 0",
          }}
        >
          <div className="max-w-screen-xl mx-auto px-6">
            {/* Client logos - same style as homepage */}
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
      </main>

      <Footer />
    </div>
  );
}